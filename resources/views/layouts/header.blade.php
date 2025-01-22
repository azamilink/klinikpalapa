<header class="bg-white inset-x-0 top-0 z-50 sticky" x-data="{ isOpen: false }">
    <nav class="flex items-center justify-between p-2 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Klinik Palapa</span>
                <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="isOpen = !isOpen">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <ul class="hidden lg:flex lg:gap-x-12">
            @foreach ($navbar as $nav)
                <x-navbar :active="request()->routeIs($nav['route'])" :href="$nav['url']">{{ $nav['name'] }}</x-navbar>
            @endforeach
        </ul>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>

    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="isOpen">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = !isOpen">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <ul class="space-y-2 py-6">
                        @foreach ($navbar as $nav)
                            <x-navlink :href="$nav['url']">{{ $nav['name'] }}</x-navlink>
                        @endforeach
                    </ul>
                    <div class="divider">Silahkan</div>
                    <div class="py-6">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
