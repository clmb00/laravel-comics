<header>
    <div class="container">
      <div class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
      </div>
      <nav>
        <ul>
            @foreach (config('db.main_menu') as $menu)
                <li class="{{Route::currentRouteName() == $menu["href"] ? 'active' : ''}}"><a href="{{ route($menu["href"]) }}">{{$menu["pageName"]}}</a></li>
            @endforeach
        </ul>
      </nav>
    </div>
</header>
