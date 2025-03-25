@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
            <video width="100%" preload="auto" loop autoplay muted style="filter: brightness(0.5);">
                <source src='assets/media/explore.mp4' type='video/mp4' />
            </video>
            <div class="container">
                <h1 class="pt-5">
                    Discover the Latest Smartphones<br>
                    at Unbeatable Prices
                </h1>
                <p class="lead">
                    Stay Connected. Stay Updated.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-mobile-alt"></i> <!-- Changed icon -->
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Browse Phones
                                </h4>
                                <p class="card-text">
                                    Explore the latest smartphones with cutting-edge features from top brands.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fas fa-tools"></i> <!-- Changed icon -->
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Accessories
                                </h4>
                                <p class="card-text">
                                    Get the best deals on cases, chargers, and other essential phone accessories.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-shipping-fast"></i> <!-- Changed icon -->
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Fast Delivery
                                </h4>
                                <p class="card-text">
                                    Enjoy quick and reliable delivery services right to your doorstep.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- WHY US Section -->
    <section id="why">
        <h2 class="title">Why Choose Us?</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fas fa-tags"></i> <!-- Changed icon -->
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Best Deals
                            </h4>
                            <p class="card-text">
                                We offer competitive pricing and exclusive deals on top smartphone brands.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fas fa-shield-alt"></i> <!-- Changed icon -->
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Secure Payment
                            </h4>
                            <p class="card-text">
                                Enjoy a safe and secure checkout process with multiple payment options.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
    <div class="card border-0 text-center gray-bg">
        <div class="card-icon">
            <div class="card-icon-i text-success">
                <i class="fas fa-headset"></i> <!-- 🟢 24/7 Support Icon -->
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">
                24/7 Support
            </h4>
            <p class="card-text">
                Our support team is available around the clock to assist with all your inquiries.
            </p>
        </div>
    </div>
</div>


                <div class="col-md-12 mt-5 text-center">
                    <a href="{{route('products.shop')}}" class="btn btn-primary btn-lg">SHOP NOW</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Categories</h2>
        <div class="landing-categories owl-carousel">
            @foreach ($categories as $category)
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="{{ asset('assets/img/' .$category->image.'') }}">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <a href="{{route('single.category', $category->id)}}" class="btn btn-primary btn-lg">{{$category->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
