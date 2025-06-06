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

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Products for this Category</h2>
                    @if($products->count() >0)
                    <div class="product-carousel owl-carousel">                        
                            @foreach ($products as $product)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                    <div class="card-badge">
                                        <img src="{{asset('assets/img/'.$product->image.'')}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('single.product', $product->id)}}">{{ $product->name}}</a>
                                        </h4>
                                        <div class="card-price">
                                            {{-- <span class="discount">Rp. 300.000</span> --}}
                                            <span class="reguler">CAD. {{ $product->price}}</span>
                                        </div>
                                        <a href="{{route('single.product', $product->id)}}" class="btn btn-block btn-primary">
                                            Details
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    @else
                         <p class="alert alert-success">There are no products in this category just now</p>
                        @endif
                </div>
            </div>
        </div>
    </section>

@endsection
