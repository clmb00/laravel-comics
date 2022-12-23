@extends('layouts.app')

@section('title')
    {{ $comic_info['series'] }}
@endsection

@section('content')
    <div id="jumbotron" class="info_jumbo"></div>
    <div id="info_page" class="container width_55">
        <div class="cover">
            <div class="hover type">{{ $comic_info['type'] }}</div>
            <img src="{{ $comic_info['thumb'] }}" alt="{{ $comic_info['series'] }}">
            <div class="hover"><a href="#">View Gallery</a></div>
        </div>
        <div class="info">
            <div class="left">
                <h2>{{ $comic_info['title'] }}</h2>
                <div class="price_bar">
                    <p><span class="light">U.S. Price: </span> {{ $comic_info['price'] }}</p>
                    <p class="light">AVAILABLE</p>
                    <p>Check Availability </p>
                </div>
                <p class="description">{{ $comic_info['description'] }}</p>
                {{-- se nelle descirzioni ho del testo in htmlm da stampare metto i !! punti di domanda --}}
                {{-- {{!! $comic_info['description'] !!}} --}}
            </div>
            <div class="right">
                <h4>ADVERTISEMENT</h4>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adv">
            </div>
        </div>
    </div>
    <div id="more_info">
        <div class="container width_55">
            <div class="talent">
                <h3>Talent</h3>
                <ul>
                    <li>
                        <h4>Art By:</h4>
                        <p>
                        @foreach ($comic_info['artists'] as $artist)
                            @if ($loop->last)
                                <span><a href="#">{{$artist}}</a></span>
                            @else
                                <span><a href="#">{{$artist}}</a>, </span>
                            @endif
                        @endforeach
                        </p>
                    </li>
                    <li>
                        <h4>Written By:</h4>
                        <p>
                            @foreach ($comic_info['writers'] as $writer)
                                @if ($loop->last)
                                    <span><a href="#">{{$writer}}</a></span>
                                @else
                                    <span><a href="#">{{$writer}}</a>, </span>
                                @endif
                            @endforeach
                            </p>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <ul>
                    <li>
                        <h4>Seires:</h4>
                        <p><a href="#">{{ strtoupper($comic_info['series']) }}</a></p>
                    </li>
                    <li>
                        <h4>U.S. Price:</h4>
                        <p>{{ $comic_info['price'] }}</p>
                    </li>
                    <li>
                        <h4>On Sale Date:</h4>
                        <?php $date=date_create($comic_info['sale_date']); ?>
                        <p>{{ date_format($date, "M d Y") }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('section_links')
<section id="info_links">
    <div class="container width_55">
        <div>
            <a href="#">DIGITAL COMICS</a>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/msg-link.png')}}" alt="item.name">
            </div>
        </div>
        <div>
            <a href="#">SHOP DC</a>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/docs-link.png')}}" alt="item.name">
            </div>
        </div>
        <div>
            <a href="#">COMICS SHOP LOCATOR</a>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/location-link.png')}}" alt="item.name">
            </div>
        </div>
        <div>
            <a href="#">SUBSCRIPTION</a>
            <div class="logo">
            <img src="{{ Vite::asset('resources/img/shirt-link.png')}}" alt="item.name">
            </div>
        </div>
    </div>
</section>
@endsection
