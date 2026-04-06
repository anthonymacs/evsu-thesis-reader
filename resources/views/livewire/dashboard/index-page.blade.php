<div class="space-y-6 font-sans antialiased text-gray-800 bg-white p-6 rounded-lg shadow-inner">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-4 border-b border-gray-200">
        <div>
            <h1 class="text-2xl font-extrabold text-gray-900 leading-tight">Thesis Dashboard</h1>
            <p class="text-sm text-gray-600 mt-1">Precision management for your crucial Thesis.</p>
        </div>
        <div class="text-xs text-gray-500 flex items-center gap-2 bg-gray-50 px-3 py-1.5 rounded-full shadow-sm border border-gray-100">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="font-medium text-gray-700">Last updated:</span> <span class="font-semibold text-red-700">{{ now()->format('M d, Y h:i A') }}</span>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">

        <!-- Left Column (Main Stats & Recent Activity) - 3/5 width on large screens -->
        <div class="lg:col-span-3 space-y-6">

            <!-- Top Statistics Cards - 2x2 Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- Total Documents -->
                <div class="bg-white rounded-xl shadow-md p-5 border border-gray-100 flex flex-col justify-between transform hover:translate-y-[-2px] transition-all duration-300 ease-in-out cursor-pointer group">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-10 h-10 bg-red-50 text-red-700 rounded-full flex items-center justify-center shadow-sm group-hover:bg-red-100 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        @if ($documentsGrowth > 0)
                            <span class="text-xs font-semibold bg-green-100 text-green-700 px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                {{ $documentsGrowth }}%
                            </span>
                        @elseif($documentsGrowth < 0)
                            <span class="text-xs font-semibold bg-red-100 text-red-700 px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                {{ $documentsGrowth }}%
                            </span>
                        @else
                            <span class="text-xs font-semibold bg-gray-100 text-gray-700 px-3 py-1 rounded-full shadow-sm">0%</span>
                        @endif
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-0.5">Total Thesis</p>
                        <h3 class="text-3xl font-extrabold text-gray-900 counter" data-target="{{ $totalDocuments }}">0</h3>
                    </div>
                    <div class="mt-4 h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-red-600 rounded-full stat-bar" style="width: {{ ($totalDocuments / 1000) * 100 > 100 ? 100 : ($totalDocuments / 1000) * 100 }}%;" data-width="{{ ($totalDocuments / 1000) * 100 > 100 ? 100 : ($totalDocuments / 1000) * 100 }}"></div>
                    </div>
                </div>

                <!-- Total Views -->
                <div class="bg-white rounded-xl shadow-md p-5 border border-gray-100 flex flex-col justify-between transform hover:translate-y-[-2px] transition-all duration-300 ease-in-out cursor-pointer group">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-10 h-10 bg-rose-50 text-rose-700 rounded-full flex items-center justify-center shadow-sm group-hover:bg-rose-100 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold bg-red-100 text-red-700 px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                            </span>
                            Live
                        </span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-0.5">Total Views</p>
                        <h3 class="text-3xl font-extrabold text-gray-900 counter" data-target="{{ $totalViews }}">0</h3>
                    </div>
                    <div class="mt-4 h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-rose-600 rounded-full stat-bar" style="width: {{ ($totalViews / 5000) * 100 > 100 ? 100 : ($totalViews / 5000) * 100 }}%;" data-width="{{ ($totalViews / 5000) * 100 > 100 ? 100 : ($totalViews / 5000) * 100 }}"></div>
                    </div>
                </div>

                <!-- Active Categories -->
                <div class="bg-white rounded-xl shadow-md p-5 border border-gray-100 flex flex-col justify-between transform hover:translate-y-[-2px] transition-all duration-300 ease-in-out cursor-pointer group">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-10 h-10 bg-pink-50 text-pink-700 rounded-full flex items-center justify-center shadow-sm group-hover:bg-pink-100 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold bg-green-100 text-green-700 px-3 py-1 rounded-full uppercase tracking-wide shadow-sm">All Active</span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-0.5">Active Categories</p>
                        <h3 class="text-3xl font-extrabold text-gray-900 counter" data-target="{{ $activeCategories }}">0</h3>
                    </div>
                    <div class="mt-4 h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-pink-600 rounded-full stat-bar" style="width: {{ ($activeCategories / 50) * 100 > 100 ? 100 : ($activeCategories / 50) * 100 }}%;" data-width="{{ ($activeCategories / 50) * 100 > 100 ? 100 : ($activeCategories / 50) * 100 }}"></div>
                    </div>
                </div>

                <!-- New This Month -->
                <div class="bg-white rounded-xl shadow-md p-5 border border-gray-100 flex flex-col justify-between transform hover:translate-y-[-2px] transition-all duration-300 ease-in-out cursor-pointer group">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-10 h-10 bg-red-100 text-red-700 rounded-full flex items-center justify-center shadow-sm group-hover:bg-red-200 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold bg-red-700 text-red-100 px-3 py-1 rounded-full uppercase tracking-wide shadow-sm">This Month</span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-0.5">New This Month</p>
                        <h3 class="text-3xl font-extrabold text-gray-900 counter" data-target="{{ $newThisMonth }}">0</h3>
                    </div>
                    <div class="mt-4 h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-red-700 rounded-full stat-bar" style="width: {{ ($newThisMonth / 100) * 100 > 100 ? 100 : ($newThisMonth / 100) * 100 }}%;" data-width="{{ ($newThisMonth / 100) * 100 > 100 ? 100 : ($newThisMonth / 100) * 100 }}"></div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-xl font-bold text-gray-900">Recent Activity</h3>
                    <a wire:navigate href="{{ route('audit-logs.index') }}"
                        class="text-sm font-semibold text-red-700 hover:text-red-900 transition-colors flex items-center gap-1">
                        View all
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <div class="space-y-4">
                    @forelse($recentActivity as $log)
                        @php
                            $iconConfig = match ($log->event) {
                                'created' => ['bg' => 'bg-green-50', 'svg' => 'text-green-600', 'path' => 'M12 4v16m8-8H4', 'label' => 'New ' . $log->auditable_type_name],
                                'updated' => ['bg' => 'bg-red-50', 'svg' => 'text-red-600', 'path' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z', 'label' => 'Updated ' . $log->auditable_type_name],
                                'deleted' => ['bg' => 'bg-rose-50', 'svg' => 'text-rose-600', 'path' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16', 'label' => 'Deleted ' . $log->auditable_type_name],
                                default => ['bg' => 'bg-gray-50', 'svg' => 'text-gray-600', 'path' => 'M5 13l4 4L19 7', 'label' => ucfirst($log->event) . ' ' . $log->auditable_type_name],
                            };
                        @endphp
                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg hover:bg-red-50 transition-colors duration-200 group border border-gray-100">
                            <div class="w-9 h-9 {{ $iconConfig['bg'] }} rounded-md flex items-center justify-center flex-shrink-0 shadow-sm group-hover:scale-105 transition-transform duration-200">
                                <svg class="w-4 h-4 {{ $iconConfig['svg'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $iconConfig['path'] }}" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-gray-900 mb-0.5">{{ $iconConfig['label'] }}</p>
                                <p class="text-xs text-gray-600">
                                    <span class="font-medium text-gray-700">{{ $log->created_at->diffForHumans() }}</span>
                                    @if ($log->user) &middot; by <span class="font-bold text-red-700">{{ $log->user->full_name }}</span> @endif
                                </p>
                            </div>
                            <a wire:navigate href="{{ route('audit-logs.show', $log) }}"
                                class="flex-shrink-0 text-xs font-semibold text-red-700 hover:text-red-900 transition-colors flex items-center gap-1 opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 duration-200">
                                Details
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    @empty
                        <div class="text-center py-6 bg-gray-50 rounded-lg border border-gray-100">
                            <p class="text-gray-500 text-sm">No recent activity to display.</p>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

        <!-- Right Column (Document Status, Top Categories, Quick Actions) - 2/5 width on large screens -->
        <div class="lg:col-span-2 space-y-6">

            <!-- Document Status -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-5">Thesis Status</h3>
                @if ($totalDocuments > 0)
                    <div class="space-y-5">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <span class="block w-4 h-4 bg-green-600 rounded-full shadow-sm"></span>
                                    <span class="text-md font-medium text-gray-800">Active Thesis</span>
                                </div>
                                <span class="text-md font-extrabold text-gray-900">{{ number_format($activeCount) }} ({{ $activePercentage }}%)</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2.5">
                                <div class="bg-green-600 h-2.5 rounded-full transition-all duration-700 ease-out" style="width: {{ $activePercentage }}%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <span class="block w-4 h-4 bg-red-600 rounded-full shadow-sm"></span>
                                    <span class="text-md font-medium text-gray-800">Archived Thesis</span>
                                </div>
                                <span class="text-md font-extrabold text-gray-900">{{ number_format($archivedCount) }} ({{ $archivedPercentage }}%)</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2.5">
                                <div class="bg-red-600 h-2.5 rounded-full transition-all duration-700 ease-out" style="width: {{ $archivedPercentage }}%"></div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center py-6 bg-gray-50 rounded-lg border border-gray-100">
                        <p class="text-gray-500 text-sm">No Thesis had been added yet.</p>
                    </div>
                @endif
            </div>

            <!-- Top Categories -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-5">Top Categories</h3>
                @if (!empty($topCategories))
                    <div class="space-y-4">
                        @php
                            $colors = ['red-700', 'red-600', 'red-500', 'red-400', 'red-300']; // Shades of red
                        @endphp
                        @foreach ($topCategories as $index => $category)
                            @php
                                $currentColorClass = $colors[$index % count($colors)];
                                $barWidth = $maxCategoryCount > 0
                                    ? round(($category->documents_count / $maxCategoryCount) * 100, 1)
                                    : 0;
                            @endphp
                            <div class="flex items-center gap-4 group">
                                <div class="w-9 h-9 bg-{{$currentColorClass}}/10 text-{{$currentColorClass}} rounded-md flex items-center justify-center flex-shrink-0 shadow-sm group-hover:scale-105 transition-transform duration-200 font-bold text-md">
                                    {{ $index + 1 }}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900 truncate">{{ $category->name }}</span>
                                        <span class="text-sm font-bold text-gray-800">{{ number_format($category->documents_count) }}</span>
                                    </div>
                                    <div class="w-full bg-gray-100 rounded-full h-2">
                                        <div class="bg-{{$currentColorClass}} h-2 rounded-full transition-all duration-700 ease-out" style="width: {{ $barWidth }}%"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-6 bg-gray-50 rounded-lg border border-gray-100">
                        <p class="text-gray-500 text-sm">No categories defined yet.</p>
                    </div>
                @endif
            </div>

            <!-- Quick Actions -->
            <div class="relative bg-red-800 rounded-xl shadow-lg p-6 overflow-hidden transform hover:translate-y-[-2px] transition-all duration-300 ease-in-out">
                <div class="absolute inset-0 pointer-events-none opacity-20" style="background-image: radial-gradient(circle at 0% 100%, #ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
                <div class="absolute -top-1/4 -right-1/4 w-72 h-72 bg-red-900 opacity-20 rounded-full blur-3xl animate-blob" style="animation-delay: 0s;"></div>
                <div class="absolute -bottom-1/4 -left-1/4 w-72 h-72 bg-red-700 opacity-20 rounded-full blur-3xl animate-blob" style="animation-delay: 2s;"></div>

                <div class="relative z-10 flex flex-col items-center justify-center gap-4 text-white text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/20 border border-white/30 rounded-full mb-2 text-xs font-bold uppercase tracking-widest text-white">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                        </span>
                        Quick Actions
                    </div>
                    <h3 class="text-2xl font-extrabold mb-1 leading-tight">Your Next Step, Fast.</h3>
                    <p class="text-red-100 text-sm">Access key features instantly, without delay.</p>
                    <div class="flex flex-col sm:flex-row items-center gap-3 mt-3 w-full">
                        <a wire:navigate href="{{ route('uploads.index') }}"
                            class="group flex-1 inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white text-red-800 font-bold rounded-lg shadow-md shadow-red-900/10 hover:bg-gray-100 transition-all duration-200 text-sm transform hover:scale-105 active:scale-95">
                            <svg class="w-4 h-4 group-hover:-rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Upload
                        </a>
                        <a wire:navigate href="{{ route('documents.index') }}"
                            class="flex-1 inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white/20 text-white font-semibold rounded-lg border border-white/30 hover:bg-white/30 transition-all duration-200 text-sm transform hover:scale-105 active:scale-95">
                            Browse
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
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
    @keyframes blob {
        0% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0, 0) scale(1); }
    }
    .animate-blob {
        animation: blob 7s infinite cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }
    .stat-bar {
        transition: width 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94); /* Ease-out effect */
        width: 0%; /* Initial state for animation */
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

            const easeOutCubic = t => 1 - Math.pow(1 - t, 3); // More pronounced ease-out

            const timer = setInterval(() => {
                step++;
                const progress = easeOutCubic(step / steps);
                el.textContent = Math.floor(progress * target).toLocaleString();
                if (step >= steps) {
                    el.textContent = target.toLocaleString();
                    clearInterval(timer);
                }
            }, duration / steps);
        });

        // Stat bar animation - reads width from data-width attribute for more control
        setTimeout(() => {
            document.querySelectorAll('.stat-bar').forEach(bar => {
                const targetWidth = bar.dataset.width;
                if (targetWidth) {
                    bar.style.width = targetWidth + '%';
                }
            });
        }, 200); // Small delay to ensure counters start first
    }

    // Run on first load
    document.addEventListener('DOMContentLoaded', initDashboard);

    // Re-run after Livewire navigates or re-renders
    document.addEventListener('livewire:navigated', initDashboard);
    document.addEventListener('livewire:update', initDashboard);
</script>
@endpush