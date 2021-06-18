<header>
        <nav>
            <a href="{{ action('MovieController@index') }}" @if ($current == 'home') class="current" @endif>Home</a>
            <a href="" @if ($current == 'movies') class="current" @endif>Movies</a>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button>Logout</button>
                    </form>
                </div>
            @endif
            
        </nav>
</header>