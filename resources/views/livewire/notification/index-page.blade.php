<div class="w-full bg-slate-50 min-h-screen py-6">
    <div class="w-full px-4 sm:px-6 lg:px-8">

        {{-- Page Header --}}
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Notifications</h1>
                <p class="text-sm text-slate-500 mt-1">
                    Stay updated on new document uploads.
                    @if ($unreadCount > 0)
                        <span class="ml-1 inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-university-red text-white">
                            {{ $unreadCount }} unread
                        </span>
                    @endif
                </p>
            </div>

            @if ($unreadCount > 0)
                <button
                    wire:click="markAllAsRead"
                    class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-university-red bg-university-red/10 border border-university-red/20 rounded-lg hover:bg-university-red/20 transition-colors">
                    Mark all as read
                </button>
            @endif
        </div>

        {{-- Notification List --}}
        <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">

            @forelse ($notifications as $notification)
                @php $isUnread = is_null($notification->read_at); @endphp

                
                 <a href="{{ route('notifications.show', [$notification->id, $notification->document->slug]) }}"
                    wire:key="notification-{{ $notification->id }}"
                    class="flex items-start gap-4 px-6 py-5 w-full border-b border-slate-100 last:border-b-0 transition-colors no-underline
                        {{ $isUnread ? 'bg-university-red/5 hover:bg-university-red/10' : 'hover:bg-slate-50' }}">

                    {{-- Icon --}}
                    <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center mt-0.5
                        {{ $isUnread ? 'bg-university-red/10' : 'bg-slate-100' }}">
                        <svg class="w-5 h-5 {{ $isUnread ? 'text-university-red' : 'text-slate-400' }}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                        </svg>
                    </div>

                    {{-- Message --}}
                    <div class="flex-1 min-w-0">
                        <p class="text-sm {{ $isUnread ? 'text-slate-800 font-medium' : 'text-slate-500' }}">
                            A new document
                            <span class="{{ $isUnread ? 'text-university-red' : 'font-medium text-slate-700' }} hover:underline">
                                "{{ $notification->document->title }}"
                            </span>
                            was uploaded.
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            {{ $notification->created_at->diffForHumans() }}
                        </p>
                    </div>

                    {{-- Unread dot --}}
                    @if ($isUnread)
                        <div class="flex-shrink-0 flex items-center">
                            <div class="w-2.5 h-2.5 bg-university-red rounded-full"></div>
                        </div>
                    @endif
                </a>

            @empty
                <div class="px-6 py-12 text-center">
                    <svg class="mx-auto w-10 h-10 text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.437L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <p class="text-sm text-slate-500">You have no notifications yet.</p>
                </div>
            @endforelse

        </div>
    </div>
</div>