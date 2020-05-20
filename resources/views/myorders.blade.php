@extends('layouts.app')

{{-- @section('css')
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
@endsection --}}


@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>My Orders</h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="/">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="/orders">My Orders</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Cart Area -->
    @foreach($orders as $order)
    <div class="container divide-from-top">
        <div class="cart-title">
            <div class="row">
                <div class="col-md-4">
                    <h6 class="ml-15">ORDER PLACED: {{ $order->created_at }}</h6>
                </div>
                <div class="col-md-6">
                    <h6 class="ml-15">SHIPPED TO: {{ $order->address->address.", ".$order->address->city.", ".$order->address->country }}</h6>
                </div>
                <div class="col-md-2">
                    <h6>PRICE</h6>
                </div>
            </div>

        </div>

                @foreach ($order->products as $product)
                    <div class="cart-single-item" >
                        <div class="row align-items-center">
                            <div class="col-md-10 col-12">
                                <div class="product-item d-flex align-items-center">
                                    <img src="{{$product->images->first()->path}}" style="width:150px; height:104px;" class="img-fluid" alt="">
                                    <a href="/{{ $product->name }}">
                                        <h6><b>{{ $product->name }}</b><br>{{ $product->description }}</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="price">{{ $product->price."€" }}</div>
                            </div>
                        </div>
                    </div>

                @endforeach
    </div>
        @endforeach

        @endsection

        @section('js')
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/ion.rangeSlider.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="/js/custom.js"></script>
            <script src="js/main.js"></script>

        @endsection




















