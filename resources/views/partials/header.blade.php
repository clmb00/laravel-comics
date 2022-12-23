<header>
    <div class="top-header">
        <div class="container">
            <a href="#">DC POWER&#x2122; VISA&#xae;</a>
            <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
          <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
          </div>
          <nav>
            <ul>
                @foreach (config('db.main_menu') as $menu)
                <?php
                    if((Route::currentRouteName() == $menu["href"]) || ($menu["href"] == 'comics' && Route::currentRouteName() == 'info')){
                        $class = 'active';
                    } else {
                        $class = '';
                    }
                ?>
                <li class="{{ $class }}"><a href="{{ route($menu['href']) }}">{{ strtoupper($menu["pageName"])}}</a></li>
                @endforeach
            </ul>
          </nav>
          <div class="search-input">
              <input type="text" name="search" id="search" placeholder="Search">
              <div class="search-icon">
                  <i class="fa-solid fa-magnifying-glass"></i>
              </div>
          </div>
        </div>
    </div>
</header>
