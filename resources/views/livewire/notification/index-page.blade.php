<div class="w-full bg-slate-50 min-h-screen py-6">
    <div class="w-full px-4 sm:px-6 lg:px-8">

        {{-- Page Header --}}
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Notifications</h1>
                <p class="text-sm text-slate-500 mt-1">Stay updated on new document uploads.</p>
            </div>
            <button class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-university-red bg-university-red/10 border border-university-red/20 rounded-lg hover:bg-university-red/20 transition-colors">
                Mark all as read
            </button>
        </div>

        {{-- Notification List --}}
        <div class="bg-white border border-slate-200 rounded-xl shadow-sm divide-y divide-slate-100 overflow-hidden">

            {{-- Unread Notification --}}
            <div class="flex items-start gap-4 px-6 py-5 bg-university-red/5 hover:bg-university-red/10 transition-colors cursor-pointer">
                <div class="flex-shrink-0 w-10 h-10 bg-university-red/10 rounded-full flex items-center justify-center mt-0.5">
                    <svg class="w-5 h-5 text-university-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-slate-800 font-medium">A new document <span class="text-university-red">"Thesis on Renewable Energy Systems"</span> was uploaded.</p>
                    <p class="text-xs text-slate-400 mt-1">2 minutes ago</p>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <div class="w-2.5 h-2.5 bg-university-red rounded-full"></div>
                </div>
            </div>

            {{-- Unread Notification --}}
            <div class="flex items-start gap-4 px-6 py-5 bg-university-red/5 hover:bg-university-red/10 transition-colors cursor-pointer">
                <div class="flex-shrink-0 w-10 h-10 bg-university-red/10 rounded-full flex items-center justify-center mt-0.5">
                    <svg class="w-5 h-5 text-university-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-slate-800 font-medium">A new document <span class="text-university-red">"Advanced Structural Analysis"</span> was uploaded.</p>
                    <p class="text-xs text-slate-400 mt-1">1 hour ago</p>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <div class="w-2.5 h-2.5 bg-university-red rounded-full"></div>
                </div>
            </div>

            {{-- Read Notification --}}
            <div class="flex items-start gap-4 px-6 py-5 hover:bg-slate-50 transition-colors cursor-pointer">
                <div class="flex-shrink-0 w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mt-0.5">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-slate-500">A new document <span class="font-medium text-slate-700">"Fluid Mechanics Research Paper"</span> was uploaded.</p>
                    <p class="text-xs text-slate-400 mt-1">Yesterday</p>
                </div>
            </div>

            {{-- Read Notification --}}
            <div class="flex items-start gap-4 px-6 py-5 hover:bg-slate-50 transition-colors cursor-pointer">
                <div class="flex-shrink-0 w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mt-0.5">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-slate-500">A new document <span class="font-medium text-slate-700">"Digital Signal Processing Notes"</span> was uploaded.</p>
                    <p class="text-xs text-slate-400 mt-1">3 days ago</p>
                </div>
            </div>

        </div>
    </div>
</div>