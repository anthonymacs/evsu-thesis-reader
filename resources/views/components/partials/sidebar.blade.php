<div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-[25] md:hidden" style="background: none;"
    aria-hidden="true">
</div>

<aside x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full" :class="sidebarCollapsed ? 'w-20' : 'w-64'"
    class="bg-university-red text-white fixed md:static inset-y-0 left-0 z-30 overflow-y-auto transition-all duration-300 shadow-lg flex flex-col"
    style="display: none;">

    <a href="{{ route('dashboard.index') }}"
        class="flex items-center justify-center h-20 border-b border-red-900 flex-shrink-0 hover:bg-black/10 transition-colors duration-200">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="EVSU Logo" class="w-12 h-12"
                style="border-radius: 50%; object-fit: cover; border: 2px solid rgba(255, 255, 255, 0.3); box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
            <span x-show="!sidebarCollapsed" x-transition class="text-2xl font-bold">
                DocHub
            </span>
        </div>
    </a>

    <nav class="mt-6 px-3 flex-1 overflow-y-auto pb-20">

        <x-partials.sidebar-link href="{{ route('dashboard.index') }}" route="dashboard*" label="Dashboard">
            <x-slot:icon>
                <x-partials.sidebar-icon path="M3 12l2-2 7-7 7 7" />
            </x-slot:icon>
        </x-partials.sidebar-link>

        <hr class="my-4 border-red-900" x-show="!sidebarCollapsed">
    </nav>

    <div class="border-t border-red-900 p-4 flex-shrink-0">
        <button @click="sidebarCollapsed = !sidebarCollapsed"
            class="w-full text-sm font-medium opacity-80 hover:opacity-100 transition">
            Collapse
        </button>
    </div>
</aside>