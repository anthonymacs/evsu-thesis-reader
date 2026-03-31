<?php

namespace App\Livewire\Notification;

use App\Models\Document;
use App\Models\DocumentView;
use App\Models\Notification;
use App\Models\ReadLater;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ShowNotificationDocumentPage extends Component
{
    use AuthorizesRequests;

    public Document $document;
    public bool $isInReadLater = false;
    public int $readLaterLastPage = 1;
    public array $viewsByCourse = [];
    public bool $showViewsModal = false;

    public function mount(Notification $notification, Document $document): void
    {
        // Ensure the notification belongs to the current user
        if ($notification->user_id !== auth()->id()) {
            abort(403);
        }

        $this->authorize('view', $document);

        $this->document = $document->load(['tags', 'category', 'uploader']);

        // Mark as read
        if (is_null($notification->read_at)) {
            $notification->update(['read_at' => now()]);
        }

        $this->trackDocumentView();
        $this->loadReadLaterState();
        $this->loadViewsByCourse();
    }
    protected function trackDocumentView(): void
    {
        $user = auth()->user();

        if (! $user || $user->isSuperAdmin()) {
            return;
        }

        if (! $user->isAdmin() && $user->course === null) {
            return;
        }

        $alreadyViewed = DocumentView::where('document_id', $this->document->id)
            ->where('user_id', $user->id)
            ->exists();

        if (! $alreadyViewed) {
            $this->document->incrementViewCount();

            DocumentView::create([
                'document_id' => $this->document->id,
                'user_id'     => $user->id,
                'course'      => $user->course?->value,
            ]);
        }
    }

    protected function loadReadLaterState(): void
    {
        if (auth()->check()) {
            $entry = ReadLater::where('user_id', auth()->id())
                ->where('document_id', $this->document->id)
                ->first();

            $this->isInReadLater     = (bool) $entry;
            $this->readLaterLastPage = $entry?->last_page ?? 1;
        }
    }

    protected function loadViewsByCourse(): void
    {
        $this->viewsByCourse = $this->document
            ->views()
            ->whereNotNull('course')
            ->selectRaw('course, count(*) as total')
            ->groupBy('course')
            ->pluck('total', 'course')
            ->toArray();
    }

    public function toggleReadLater(): void
    {
        $user = auth()->user();

        $entry = ReadLater::where('user_id', $user->id)
            ->where('document_id', $this->document->id)
            ->first();

        if ($entry) {
            $entry->delete();
            $this->isInReadLater     = false;
            $this->readLaterLastPage = 1;
        } else {
            ReadLater::create([
                'user_id'     => $user->id,
                'document_id' => $this->document->id,
                'last_page'   => 1,
            ]);
            $this->isInReadLater = true;
        }

        $this->dispatch('read-later-updated');
    }

    public function saveProgress(int $page): void
    {
        ReadLater::where('user_id', auth()->id())
            ->where('document_id', $this->document->id)
            ->update(['last_page' => $page]);
    }

    public function render()
    {
        return view('livewire.notification.show-notification-document-page');
    }
}
