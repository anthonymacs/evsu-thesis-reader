<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            <p class="text-sm text-gray-500">Overview of your document management system</p>
        </div>
        <div class="text-sm text-gray-500">
            Last updated: <span class="font-semibold text-gray-900">{{ now()->format('M d, Y g:i A') }}</span>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Total Documents -->
        <div class="stat-card relative overflow-hidden bg-university-red rounded-2xl p-6 text-white shadow-lg shadow-university-red/30"
            style="animation: cardEntrance 0.5s ease-out both;">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-8 -left-4 w-24 h-24 bg-black/10 rounded-full blur-xl"></div>
                <div class="absolute inset-0 opacity-[0.04]"
                    style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 16px 16px;"></div>
            </div>
            <div class="relative">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    @if ($documentsGrowth > 0)
                        <span class="text-xs font-bold bg-white/20 text-white px-2.5 py-1 rounded-full backdrop-blur-sm">
                            ↑ {{ $documentsGrowth }}%
                        </span>
                    @elseif($documentsGrowth < 0)
                        <span class="text-xs font-bold bg-black/20 text-white px-2.5 py-1 rounded-full">
                            ↓ {{ $documentsGrowth }}%
                        </span>
                    @else
                        <span class="text-xs font-bold bg-white/10 text-white px-2.5 py-1 rounded-full">0%</span>
                    @endif
                </div>
                <div class="space-y-1">
                    <h3 class="text-4xl font-black text-white counter" data-target="{{ $totalDocuments }}">0</h3>
                    <p class="text-red-200 text-sm font-semibold">Total Documents</p>
                </div>
                <div class="mt-4 h-1 w-full bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-white/40 rounded-full stat-bar" style="width: 0%; transition: width 1.2s ease-out 0.6s;"></div>
                </div>
            </div>
        </div>

        <!-- Total Views -->
        <div class="stat-card relative overflow-hidden bg-white rounded-2xl p-6 border-2 border-university-red/10 shadow-lg hover:border-university-red/30 hover:shadow-university-red/10 transition-all duration-300"
            style="animation: cardEntrance 0.5s ease-out 0.1s both;">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-university-red/5 rounded-full blur-2xl"></div>
            </div>
            <div class="relative">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-12 h-12 bg-university-red/10 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-university-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div class="w-8 h-8 rounded-full border-2 border-university-red/20 flex items-center justify-center">
                        <div class="w-3 h-3 rounded-full bg-university-red/40 animate-ping"></div>
                    </div>
                </div>
                <div class="space-y-1">
                    <h3 class="text-4xl font-black text-gray-900 counter" data-target="{{ $totalViews }}">0</h3>
                    <p class="text-gray-500 text-sm font-semibold">Total Views</p>
                </div>
                <div class="mt-4 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-university-red rounded-full stat-bar" style="width: 0%; transition: width 1.4s ease-out 0.7s;"></div>
                </div>
            </div>
        </div>

        <!-- Active Categories -->
        <div class="stat-card relative overflow-hidden bg-white rounded-2xl p-6 border-2 border-university-red/10 shadow-lg hover:border-university-red/30 hover:shadow-university-red/10 transition-all duration-300"
            style="animation: cardEntrance 0.5s ease-out 0.2s both;">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-university-red/5 rounded-full blur-2xl"></div>
            </div>
            <div class="relative">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-12 h-12 bg-university-red/10 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-university-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                    </div>
                    <span class="text-[10px] text-university-red font-bold bg-red-50 border border-university-red/20 px-2.5 py-1 rounded-full uppercase tracking-wide">All active</span>
                </div>
                <div class="space-y-1">
                    <h3 class="text-4xl font-black text-gray-900 counter" data-target="{{ $activeCategories }}">0</h3>
                    <p class="text-gray-500 text-sm font-semibold">Active Categories</p>
                </div>
                <div class="mt-4 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-university-red rounded-full stat-bar" style="width: 0%; transition: width 1.6s ease-out 0.8s;"></div>
                </div>
            </div>
        </div>

        <!-- New This Month -->
        <div class="stat-card relative overflow-hidden bg-gray-900 rounded-2xl p-6 text-white shadow-lg"
            style="animation: cardEntrance 0.5s ease-out 0.3s both;">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-university-red/30 rounded-full blur-2xl animate-pulse"></div>
                <div class="absolute -bottom-8 -left-4 w-24 h-24 bg-university-red/10 rounded-full blur-xl"></div>
                <div class="absolute inset-0 opacity-[0.03]"
                    style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 16px 16px;"></div>
            </div>
            <div class="relative">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-12 h-12 bg-university-red/20 rounded-xl flex items-center justify-center border border-university-red/30">
                        <svg class="w-6 h-6 text-university-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                    </div>
                    <span class="text-[10px] text-university-red font-bold bg-university-red/10 border border-university-red/20 px-2.5 py-1 rounded-full uppercase tracking-wide">This month</span>
                </div>
                <div class="space-y-1">
                    <h3 class="text-4xl font-black text-white counter" data-target="{{ $newThisMonth }}">0</h3>
                    <p class="text-gray-400 text-sm font-semibold">New This Month</p>
                </div>
                <div class="mt-4 h-1 w-full bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-university-red rounded-full stat-bar" style="width: 0%; transition: width 1.8s ease-out 0.9s;"></div>
                </div>
            </div>
        </div>

    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Document Status -->
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Document Status</h3>
            @if ($totalDocuments > 0)
                <div class="space-y-4">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Active</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900">{{ number_format($activeCount) }} ({{ $activePercentage }}%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full transition-all duration-700" style="width: {{ $activePercentage }}%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Archived</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900">{{ number_format($archivedCount) }} ({{ $archivedPercentage }}%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full transition-all duration-700" style="width: {{ $archivedPercentage }}%"></div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500 text-sm">No documents available</p>
                </div>
            @endif
        </div>

        <!-- Top Categories -->
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Top Categories</h3>
            @if (!empty($topCategories))
                <div class="space-y-4">
                    @foreach ($topCategories as $index => $category)
                        @php
                            $colors = ['blue', 'green', 'purple', 'yellow', 'red'];
                            $color = $colors[$index] ?? 'gray';
                            $barWidth = $maxCategoryCount > 0
                                ? round(($category->documents_count / $maxCategoryCount) * 100, 1)
                                : 0;
                        @endphp
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-{{ $color }}-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-sm font-bold text-{{ $color }}-600">{{ $index + 1 }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900">{{ $category->name }}</span>
                                    <span class="text-sm font-bold text-gray-900">{{ number_format($category->documents_count) }}</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-1.5">
                                    <div class="bg-{{ $color }}-500 h-1.5 rounded-full transition-all duration-700" style="width: {{ $barWidth }}%"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500 text-sm">No categories available</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-xl border border-gray-200 p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-900">Recent Activity</h3>
            <a wire:navigate href="{{ route('audit-logs.index') }}"
                class="text-sm font-semibold text-university-red hover:text-red-800 transition-colors">
                View all →
            </a>
        </div>
        <div class="space-y-3">
            @forelse($recentActivity as $log)
                @php
                    $iconConfig = match ($log->event) {
                        'created' => ['bg' => 'bg-green-100', 'svg' => 'text-green-600', 'path' => 'M12 4v16m8-8H4', 'label' => 'New ' . $log->auditable_type_name],
                        'updated' => ['bg' => 'bg-blue-100', 'svg' => 'text-blue-600', 'path' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z', 'label' => 'Updated ' . $log->auditable_type_name],
                        'deleted' => ['bg' => 'bg-red-100', 'svg' => 'text-red-600', 'path' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16', 'label' => 'Deleted ' . $log->auditable_type_name],
                        default => ['bg' => 'bg-purple-100', 'svg' => 'text-purple-600', 'path' => 'M5 13l4 4L19 7', 'label' => ucfirst($log->event) . ' ' . $log->auditable_type_name],
                    };
                @endphp
                <div class="flex items-center gap-3 p-3 bg-gray-50 hover:bg-red-50/40 rounded-xl transition-colors duration-200 group">
                    <div class="w-8 h-8 {{ $iconConfig['bg'] }} rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-4 h-4 {{ $iconConfig['svg'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $iconConfig['path'] }}" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-gray-900">{{ $iconConfig['label'] }}</p>
                        <p class="text-xs text-gray-500 mt-0.5">
                            {{ $log->created_at->diffForHumans() }}
                            @if ($log->user) &middot; by {{ $log->user->full_name }} @endif
                        </p>
                    </div>
                    <a wire:navigate href="{{ route('audit-logs.show', $log) }}"
                        class="flex-shrink-0 text-xs font-semibold text-university-red hover:text-red-800 transition-colors">
                        View →
                    </a>
                </div>
            @empty
                <div class="text-center py-8">
                    <p class="text-gray-500 text-sm">No recent activity found</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="relative overflow-hidden bg-gray-900 rounded-2xl p-8">
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-16 -left-16 w-64 h-64 bg-university-red/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-university-red/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
            <div class="absolute inset-0 opacity-[0.04]"
                style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
        </div>
        <div class="relative flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-university-red/20 border border-university-red/30 rounded-full mb-3">
                    <span class="flex h-1.5 w-1.5 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-university-red opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-university-red"></span>
                    </span>
                    <span class="text-university-red text-[10px] font-bold uppercase tracking-widest">Quick Actions</span>
                </div>
                <h3 class="text-2xl font-black text-white mb-1">Ready to add new documents?</h3>
                <p class="text-gray-400 text-sm">Upload and manage your documents efficiently</p>
            </div>
            <div class="flex items-center gap-3 flex-shrink-0">
                <a wire:navigate href="{{ route('uploads.index') }}"
                    class="group inline-flex items-center gap-2 px-5 py-2.5 bg-university-red text-white font-semibold rounded-xl hover:bg-red-700 transition-all duration-200 shadow-lg shadow-university-red/25 text-sm hover:scale-105 active:scale-95">
                    <svg class="w-4 h-4 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Upload Document
                </a>
                <a wire:navigate href="{{ route('documents.index') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-200 border border-white/10 hover:border-white/20 text-sm hover:scale-105 active:scale-95">
                    Browse All
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>

@push('styles')
<style>
    @keyframes cardEntrance {
        from { opacity: 0; transform: translateY(24px) scale(0.97); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }
</style>
@endpush

@push('scripts')
<script>
    function initDashboard() {

        // Counter animation with easing
        document.querySelectorAll('.counter').forEach(el => {
            const target = parseInt(el.dataset.target) || 0;
            const duration = 1600;
            const steps = 60;
            let step = 0;

            const ease = t => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;

            const timer = setInterval(() => {
                step++;
                const progress = ease(step / steps);
                el.textContent = Math.floor(progress * target).toLocaleString();
                if (step >= steps) {
                    el.textContent = target.toLocaleString();
                    clearInterval(timer);
                }
            }, duration / steps);
        });

        // Stat bar animation — reads width from inline style data attribute
        setTimeout(() => {
            document.querySelectorAll('.stat-bar').forEach(bar => {
                const targetWidth = bar.dataset.width;
                if (targetWidth) {
                    bar.style.width = targetWidth + '%';
                }
            });
        }, 200);
    }

    // Run on first load
    document.addEventListener('DOMContentLoaded', initDashboard);

    // Re-run after Livewire navigates or re-renders
    document.addEventListener('livewire:navigated', initDashboard);
    document.addEventListener('livewire:update', initDashboard);
</script>
@endpush