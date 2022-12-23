<footer>
    <div class="container top">
        <div id="left">
          <nav>
            @foreach (config('db.footer_menu') as $menu)
            <div>
                <h3>{{$menu['sectionName']}}</h3>
                <ul>
                    @foreach ($menu['sectionContent'] as $content)
                        <li><a href="{{ route($content['href']) }}">{{$content['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
          </nav>
        </div>
    </div>
    <div id="social-bar">
        <div class="container">
          <button>Sign-up Now!</button>
          <div class="social">
            <a href="#">Follow Us</a>
            <div class="btn">
              <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt=""></a>
            </div>
            <div class="btn">
              <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt=""></a>
            </div>
            <div class="btn">
              <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt=""></a>
            </div>
            <div class="btn">
              <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></a>
            </div>
            <div class="btn">
              <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt=""></a>
            </div>
          </div>
        </div>
    </div>
</footer>
