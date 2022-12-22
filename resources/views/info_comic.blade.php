@extends('layouts.app')

@section('title')
    Info
@endsection

@section('content')
    <div id="jumbotron"></div>
    <div class="blank_page">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, debitis. Illum officiis et voluptate animi numquam facilis repudiandae nisi sequi cum, doloremque, fugiat quasi quaerat veritatis consectetur vitae itaque dignissimos.
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
