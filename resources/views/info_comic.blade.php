@extends('layouts.app')

@section('title')
    Info
@endsection

@section('content')
    <div id="jumbotron"></div>
    <div class="container">
        <div class="cover">
            <img src="" alt="">
        </div>
        <div class="right">
            <h2>Action Comics #1000: The Deluxe Edition</h2>
            <div class="price_bar">
                <p>U.S. Price 19.99</p>
                <p>AVAILABLE</p>
                <p>Check Availability</p>
            </div>
            <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magnam alias quis at itaque assumenda, nobis in sunt aperiam tenetur eveniet exercitationem totam molestiae laborum tempore porro quod perferendis facilis.</p>
                    </li>
                    <li>
                        <h4>Written By</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magnam alias quis at itaque assumenda, nobis in sunt aperiam tenetur eveniet exercitationem totam molestiae laborum tempore porro quod perferendis facilis.</p>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <ul>
                    <li>
                        <h4>Seires</h4>
                        <p>ACTION COMICS</p>
                    </li>
                    <li>
                        <h4>U.S. Price</h4>
                        <p>$19.99</p>
                    </li>
                    <li>
                        <h4>On Sale Date</h4>
                        <p>Oct 02 2018</p>
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
