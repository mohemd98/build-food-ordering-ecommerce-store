@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
            <video width="100%" preload="auto" loop autoplay muted>
                <source src="{{ asset( 'assets/media/explore.mp4')}}" type='video/mp4' />
                <source src="{{ asset('assets/media/explore.webm')}}" type='video/webm' />
            </video>
            <div class="container">
                <h1 class="pt-5">
                    Save time and leave the<br>
                    groceries to us.
                </h1>
                <p class="lead">
                    Always Fresh Everyday.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Buy
                                </h4>
                                <p class="card-text">
                                    Simply click-to-buy on the product you want and submit your order when you're done.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Harvest
                                </h4>
                                <p class="card-text">
                                    Our team ensures the produce quality is up to our standard and delivers to your door within 24 hours of harvest day.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-truck"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Delivery
                                </h4>
                                <p class="card-text">
                                    Farmers receive your orders two days in advance so they can prepare for harvest exactly as your orders – no wasted produce.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

                <section id="why">
                    <h2 class="title">Why Freschery</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0 text-center gray-bg">
                                    <div class="card-icon">
                                        <div class="card-icon-i text-success">
                                            <i class="fas fa-leaf"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Straight from the Farm
                                        </h4>
                                        <p class="card-text">
                                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0 text-center gray-bg">
                                    <div class="card-icon">
                                        <div class="card-icon-i text-success">
                                            <i class="fa fa-question"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Know Your Farmers
                                        </h4>
                                        <p class="card-text">
                                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0 text-center gray-bg">
                                    <div class="card-icon">
                                        <div class="card-icon-i text-success">
                                            <i class="fas fa-smile"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Improving Farmers’ Livelihood
                                        </h4>
                                        <p class="card-text">
                                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-5 text-center">
                                <a href="shop.html" class="btn btn-primary btn-lg">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="categories" class="pb-0 gray-bg">
                    <h2 class="title">Categories</h2>
                    <div class="landing-categories owl-carousel">
                        @foreach($categories as $category)
                        <div class="item">
                            <div class="card rounded-0 border-0 text-center">
                                <img src="{{ asset( 'assets/img/'.$category->image.'')}}">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <!-- <h4 class="card-title">Vegetables</h4> -->
                                    <a href="{{route('single.category' , $category->id)}}" class="btn btn-primary btn-lg">{{$category->name}}</a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </section>
</div>

@endsection
