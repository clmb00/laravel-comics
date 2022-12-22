@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('content')
    <div id="jumbotron"></div>
    <main class="comics">
    <div class="container">
        <h1>Current Seires</h1>
        <div class="card-group">
            <div class="card">
                <div class="cover">
                  <img :src="thumbUrl" :alt="name">
                </div>
                <h4>Prova</h4>
            </div>
        </div>
        <div class="button-container" v-on:click='incrementLoading'>
        <button> Load More </button>
        </div>
    </div>
    </main>
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
                <a href="#">Dc Merchandise</a>
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
            <div>
                <div class="logo">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="item.name">
                </div>
                <a href="#">Dc Power Visa</a>
            </div>
        </div>
    </section>
@endsection
