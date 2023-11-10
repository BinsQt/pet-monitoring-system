<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-10 lg:px-8 bg-blue-600">
        <div class="flex justify-between h-16">
            <div class="flex items-center justify-between w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="dashboard">
                        <x-logo-main class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                <div class="text-xl uppercase underline">{{ Auth::user()->username }}</div>

            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            {{-- <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboards') }}
            </x-responsive-nav-link> --}}
        </div>
    </div>
</nav>
