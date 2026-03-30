<?php

namespace App\Livewire\Notification;

use App\Models\Notification;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class IndexPage extends Component
{
    public function markAllAsRead(): void
    {
        Notification::where('user_id', auth()->id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    }

    public function markAsRead(int $id): void
    {
        Notification::where('id', $id)
            ->where('user_id', auth()->id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    }

    public function render()
    {
        $notifications = Notification::with('document')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('livewire.notification.index-page', [
            'notifications' => $notifications,
            'unreadCount'   => $notifications->whereNull('read_at')->count(),
        ]);
    }
}