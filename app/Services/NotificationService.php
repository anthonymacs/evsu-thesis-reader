<?php

namespace App\Services;

use App\Models\Document;
use App\Models\Notification;
use App\Models\User;

class NotificationService
{
    public function notifyAllOnUpload(Document $document): void
    {
        $recipients = User::where('id', '!=', $document->uploaded_by)->pluck('id');

        $notifications = $recipients->map(fn ($userId) => [
            'user_id'     => $userId,
            'document_id' => $document->id,
            'read_at'     => null,
            'created_at'  => now(),
            'updated_at'  => now(),
        ])->all();

        // Chunk insert to avoid hitting query limits on large user bases
        foreach (array_chunk($notifications, 500) as $chunk) {
            Notification::insert($chunk);
        }
    }
}