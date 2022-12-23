@extends('layouts.app')

@section('title')
    Info
@endsection

@section('content')
    <div id="jumbotron"></div>
    <div class="container">
        <div class="cover">
            <img src="{{ $comic_info['thumb'] }}" alt="{{ $comic_info['series'] }}">
        </div>
        <div class="right">
            <h2>{{ $comic_info['title'] }}</h2>
            <div class="price_bar">
                <p>U.S. Price {{ $comic_info['price'] }}</p>
                <p>AVAILABLE</p>
                <p>Check Availability</p>
            </div>
            <p>{{ $comic_info['description'] }}</p>
            {{-- se nelle descirzioni ho del testo in htmlm da stampare metto i !! punti di domanda --}}
            {{-- {{!! $comic_info['description'] !!}} --}}
        </div>
        <div class="left">
            <h4>ADVERTISEMENT</h4>
            <img src="" alt="">
        </div>
        <div class="more_info">
            <div class="talent">
                <ul>
                    <li>
                        <h4>Art By</h4>
                        <p>
                        @foreach ($comic_info['artists'] as $artist)
                            @if ($loop->last)
                                <span>{{$artist}}</span>
                            @else
                                <span>{{$artist}}, </span>
                            @endif
                        @endforeach
                        </p>
                    </li>
                    <li>
                        <h4>Written By</h4>
                        <p>
                            @foreach ($comic_info['writers'] as $writer)
                                @if ($loop->last)
                                    <span>{{$writer}}</span>
                                @else
                                    <span>{{$writer}}, </span>
                                @endif
                            @endforeach
                            </p>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <ul>
                    <li>
                        <h4>Seires</h4>
                        <p>{{ $comic_info['series'] }}</p>
                    </li>
                    <li>
                        <h4>U.S. Price</h4>
                        <p>{{ $comic_info['price'] }}</p>
                    </li>
                    <li>
                        <h4>On Sale Date</h4>
                        <p>{{ $comic_info['sale_date'] }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('section_links')
<section>
    <div class="container">
        <div>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="item.name">
            </div>
            <a href="#">Digital Comics</a>
        </div>
        <div>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="item.name">
            </div>
            <a href="#">Dc Store</a>
        </div>
        <div>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="item.name">
            </div>
            <a href="#">Subscription</a>
        </div>
        <div>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="item.name">
            </div>
            <a href="#">Comics Shop Locator</a>
        </div>
    </div>
</section>
@endsection
