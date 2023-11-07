<section>
    <header class="w-full bg-blue-600 h-20 flex items-center justify-end px-5 ">
        <div class="p-2">
        @if (Route::has('login'))
                @auth
                    @else
                        <a href="{{ route('login') }}"
                        class="mx-2 text-2xl
                        {{ request()->is('login') ? 'text-blue-300':'' }}
                        {{ request()->is('login') ? 'font-bold':'' }}
                        {{ request()->is('login') ? 'underline':'' }}"
                        >Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                        class="mx-2 text-2xl
                        {{ request()->is('register') ? 'text-blue-300':'' }}
                        {{ request()->is('register') ? 'font-bold':'' }}
                        {{ request()->is('register') ? 'underline':'' }}
                        ">Register</a>
                    @endif
                @endauth
        @endif
    </div>
</header>
</section>
