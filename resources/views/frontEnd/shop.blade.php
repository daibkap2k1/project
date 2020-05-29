@extends('layouts/frontEnd/layoutFrontEnd')
@section('titleWeb',"Shop")
@section('content')
<section class="banner-page2 text-center">
    <h1>Shop</h1>
    <p>Home / <span>Shop</span> </p>
</section>
<section class="wp-box">
    <div class="wp-container container">
        <div class="row">
            <div class="col-lg-2 sidebarLeft">
                <div class="box-sl">
                    <div class="title-boxsl">
                        <h3>Categories</h3>
                        <img src="{{asset('public/frontEnd/images/song.png')}}" alt="">
                    </div>
                    <ul class="content-boxsl">
                        <li><a href="">Spa</a></li>
                        <li><a href="">Beauty</a></li>
                        <li><a href="">Make up</a></li>
                        <li><a href="">Skincare</a></li>
                        <li><a href="">Body care</a></li>
                        <li><a href="">Tools</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                âfafa
            </div>
        </div>
    </div>
</section>
@endsection