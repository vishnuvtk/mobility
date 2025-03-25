@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    Shopping Page
                </h1>
                <p class="lead">
                    Discover the Latest Smartphones at Unbeatable Prices.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    {{-- @foreach ($categories as $category)
                        <div class="item">
                            <a href="{{route('single.category', $category->id) }}">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="sb-bistro-{{$category->icon}}"></i></span>
                                    <div class="media-body">
                                        <h5>{{$category->name}}</h5>
                                        <p>Freshly Harvested Veggies From Local Growers</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach --}}
                    

                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Most Wanted</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($mostWanted as $most)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-primary">
                                            Until {{$most->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$most->image.'')}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.product', $most->id)}}">{{$most->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        {{-- <span class="discount">Rp. 300.000</span> --}}
                                        <span class="reguler">CAD. {{$most->price}}</span>
                                    </div>
                                    <a href="{{route('single.product', $most->id)}}" class="btn btn-block btn-primary">
                                        Details
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ONEPLUS" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">ONEPLUS</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($ONEPLUS as $product)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-primary">
                                            Until {{$product->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.product', $product->id)}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        {{-- <span class="discount">Rp. 300.000</span> --}}
                                        <span class="reguler">CAD. {{$product->price}}</span>
                                    </div>
                                    <a href="{{route('single.product', $product->id)}}" class="btn btn-block btn-primary">
                                        Details
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="SAMSUNG">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">SAMSUNG</h2>
                    <div class="product-carousel owl-carousel">

                        @foreach ($SAMSUNG as $product)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-primary">
                                            Until {{$product->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.product', $product->id)}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        {{-- <span class="discount">Rp. 300.000</span> --}}
                                        <span class="reguler">CAD. {{$product->price}}</span>
                                    </div>
                                    <a href="{{route('single.product', $product->id)}}" class="btn btn-block btn-primary">
                                        Details
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="OPPO" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">OPPO</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($OPPO as $product)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-primary">
                                            Until {{$product->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.product', $product->id)}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        {{-- <span class="discount">Rp. 300.000</span> --}}
                                        <span class="reguler">CAD. {{$product->price}}</span>
                                    </div>
                                    <a href="{{route('single.product', $product->id)}}" class="btn btn-block btn-primary">
                                        Details
                                    </a>

                                </div>
                            </div>
                        </div>

                        @endforeach
                     

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="APPLE">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">APPLE</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($APPLE as $product)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-primary">
                                            Until {{$product->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.product', $product->id)}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        {{-- <span class="discount">Rp. 300.000</span> --}}
                                        <span class="reguler">CAD. {{$product->price}}</span>
                                    </div>
                                    <a href="{{route('single.product', $product->id)}}" class="btn btn-block btn-primary">
                                        Details
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
               
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection