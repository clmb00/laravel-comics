<header>
    <div class="container">
      <div class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
      </div>
      <nav>
        <ul>
            <li class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}"><a href="{{ route('characters') }}">CHARACTERS</a></li>
            <li class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}"><a href="{{ route('comics') }}">COMICS</a></li>
            <li class="{{Route::currentRouteName() == 'movies' ? 'active' : ''}}"><a href="{{ route('movies') }}">MOVIES</a></li>
            <li class="{{Route::currentRouteName() == 'tv' ? 'active' : ''}}"><a href="{{ route('tv') }}">TV</a></li>
            <li class="{{Route::currentRouteName() == 'games' ? 'active' : ''}}"><a href="{{ route('games') }}">GAMES</a></li>
            <li class="{{Route::currentRouteName() == 'collectibles' ? 'active' : ''}}"><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
            <li class="{{Route::currentRouteName() == 'videos' ? 'active' : ''}}"><a href="{{ route('videos') }}">VIDEOS</a></li>
            <li class="{{Route::currentRouteName() == 'fans' ? 'active' : ''}}"><a href="{{ route('fans') }}">FANS</a></li>
            <li class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}"><a href="{{ route('news') }}">NEWS</a></li>
            <li class="{{Route::currentRouteName() == 'shop' ? 'active' : ''}}"><a href="{{ route('shop') }}">SHOP</a></li>
        </ul>
      </nav>
    </div>
</header>
