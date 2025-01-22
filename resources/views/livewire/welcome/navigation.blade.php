<nav class="-mx-3 flex flex-1 lg:justify-end justify-start">
    @auth
        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 bg-primary text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}" class="rounded-md mx-3 px-3 py-2 text-primary text-xl font-bold ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Login
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 bg-primary text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
        @endif
    @endauth
</nav>
