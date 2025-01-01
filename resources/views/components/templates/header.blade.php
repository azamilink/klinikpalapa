<header class="fixed inset-x-0 top-0 z-50 border-b border-gray-200/25 bg-white">
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Palapa Dentist</span>
                <img class="h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-primary text-xl">
                <x-navbar :active="request()->routeIs('home')" href="/">Home</x-navbar>
                <x-navbar :active="request()->routeIs('about')" href="/about">About Us</x-navbar>
                <x-navbar :active="request()->routeIs('contact')" href="/contact">Contact Us</x-navbar>
                <x-navbar :active="request()->routeIs('dentist')" href="/dentist">Ourt Dentist</x-navbar>
                <x-navbar :active="request()->routeIs('department')" href="/department">Department</x-navbar>
                <x-navbar :active="request()->routeIs('blog')" href="/blog">Blog</x-navbar>
                <x-navbar :active="request()->routeIs('inscurance')" href="/insurance">Insurance</x-navbar>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn bg-primary text-white">Make An Appointment</a>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" onclick="toggleDropDown()">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div id="dropMenu" class="hidden fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <x-navlink href="/">Home</x-navlink>
                        <x-navlink href="/about">About Us</x-navlink>
                        <x-navlink href="/contact">Contact Us</x-navlink>
                        <x-navlink href="/dentist">Our Dentist</x-navlink>
                        <x-navlink href="/department">Department</x-navlink>
                        <x-navlink href="/blog">Blog</x-navlink>
                        <x-navlink href="/insurance">Insurance</x-navlink>
                    </div>
                    <div class="md:hidden  py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Make
                            An Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleDropDown() {
        let dropDown = document.querySelector('#dropMenu');
        dropDown.classList.toggle("hidden");
    }
</script>
