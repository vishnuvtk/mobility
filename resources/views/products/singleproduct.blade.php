@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    {{$product->name}}
                </h1>
                <p class="lead">
                    Discover the Latest Smartphones at Unbeatable Prices.
                </p>
            </div>
        </div>
    </div>

    <div class="container"> <br>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                    <p>{!! \Session::get('success') !!}</p>
            </div>
        @endif
    </div>


    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-zoom">
                        <a href="{{asset('assets/img/'.$product->image.'')}}" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                            <img alt="Detail Zoom thumbs image" src="{{asset('assets/img/'.$product->image.'')}}" style="width: 100%;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>
                        <strong>Overview</strong><br>
                        {{$product->description}}
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <strong>Price</strong> <br>
                                <span class="price">CAD {{$product->price}}</span>
                                {{-- <span class="old-price">Rp 150.000</span> --}}
                            </p>
                        </div>
                       
                    </div>
                    <p class="mb-1">
                        <strong>Quantity</strong>
                    </p>
                    <form method="POST" action= "{{route('products.add.cart')}}" >
                        @csrf
                        <div class="row">
                            <div class="col-sm-5">
                                <input name="qty" class="form-control" type="number" min="1" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="1" name="vertical-spin">
                            </div>
                        </div>               
                        <input name="name" value="{{$product->name}}" type="hidden">
                        <input name="price" value="{{$product->price}}" type="hidden">
                        <input name="pro_id" value="{{$product->id}}" type="hidden">
                        <input name="image" value="{{$product->image}}" type="hidden">
                        @if(@isset(auth::user()->id))
                            @if($checkInCart >0)                        
                            <button disabled class="mt-3 btn btn-primary btn-lg">
                                <i class="fa fa-shopping-basket"></i> Added to Cart
                            </button>

                            @else
                                <button type = "submit" name="submit" class="mt-3 btn btn-primary btn-lg">
                                    <i class="fa fa-shopping-basket"></i> Add to Cart
                                </button>
                            @endif
                            
                        @else
                            <p class="alert alert-success mt-5">Login to add product to cart</p>
                        @endif
                        
                    </form>
                
                </div>
            </div>
        </div>
    </div>

    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Related Products</h2>
                    @if($relatedProducts->count() >0)
                        <div class="product-carousel owl-carousel">
                                @foreach ($relatedProducts as $relatedProduct)
                                    <div class="item">
                                        <div class="card card-product">
                                           
                                            <div class="card-badge">
                                             
                                                <img src="{{asset('assets/img/'. $relatedProduct->image.'')}}" alt="Card image 2" class="card-img-top">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <a href="{{route('single.product', $product->id)}}">{{$relatedProduct->name}}</a>
                                                </h4>
                                                <div class="card-price">
                                                    {{-- <span class="discount">Rp. 300.000</span> --}}
                                                    <span class="reguler">CAD {{$relatedProduct->price}}</span>
                                                </div>
                                                <a href="{{route('single.product', $relatedProduct->id)}}" class="btn btn-block btn-primary">
                                                    product details
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                        </div>
                    @else
                         <p class="alert alert-success">There are no related products in this category just now</p>
                        @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection