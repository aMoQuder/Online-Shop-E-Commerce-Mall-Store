@extends('layouts.app')
@include('temp.navbarApp')
@section('content')
    <main class="main">
        <div class="intro-slider-container">
            <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl"
                data-owl-options='{
                "nav": false,
                "responsive": {
                    "992": {
                        "nav": true
                    }
                }
            }'>
                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-13/slider/slide-1.png);">
                    <div class="container intro-content">
                        <div class="row">
                            <div class="col-auto offset-lg-3 intro-col">
                                <h3 class="intro-subtitle">Trade-In Offer</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">MacBook Air <br>Latest Model
                                    <span>
                                        <sup class="font-weight-light">from</sup>
                                        <span class="text-primary">$999<sup>,99</sup></span>
                                    </span>
                                </h1>
                                <!-- End .intro-title -->

                                <a href="category.html" class="btn btn-outline-primary-2">
                                    <span>Shop Now</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div>
                            <!-- End .col-auto offset-lg-3 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .container intro-content -->
                </div>
                <!-- End .intro-slide -->

                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-13/slider/slide-2.jpg);">
                    <div class="container intro-content">
                        <div class="row">
                            <div class="col-auto offset-lg-3 intro-col">
                                <h3 class="intro-subtitle">Trevel & Outdoor</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">Original Outdoor <br>Beanbag
                                    <span>
                                        <sup class="font-weight-light line-through">$89,99</sup>
                                        <span class="text-primary">$29<sup>,99</sup></span>
                                    </span>
                                </h1>
                                <!-- End .intro-title -->

                                <a href="category.html" class="btn btn-outline-primary-2">
                                    <span>Shop Now</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div>
                            <!-- End .col-auto offset-lg-3 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .container intro-content -->
                </div>
                <!-- End .intro-slide -->

                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-13/slider/slide-3.jpg);">
                    <div class="container intro-content">
                        <div class="row">
                            <div class="col-auto offset-lg-3 intro-col">
                                <h3 class="intro-subtitle">Fashion Promotions</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">Tan Suede <br>Biker Jacket
                                    <span>
                                        <sup class="font-weight-light line-through">$240,00</sup>
                                        <span class="text-primary">$180<sup>,99</sup></span>
                                    </span>
                                </h1>
                                <!-- End .intro-title -->

                                <a href="category.html" class="btn btn-outline-primary-2">
                                    <span>Shop Now</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div>
                            <!-- End .col-auto offset-lg-3 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .container intro-content -->
                </div>
                <!-- End .intro-slide -->
            </div>
            <!-- End .owl-carousel owl-simple -->

            <span class="slider-loader"></span>
            <!-- End .slider-loader -->
        </div>
        <!-- End .intro-slider-container -->

        <div class="mb-4"></div>
        <!-- End .mb-2 -->

        <div class="container">
            <h2 class="title text-center mb-2">Explore Popular Categories</h2>
            <!-- End .title -->

            <div class="cat-blocks-container">
                <div class="row">
                    @foreach ($category as $item)
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="{{ asset('/category/image/' . $item->image) }}" alt="Category image"
                                            style="width: 100%; height: 100px;">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">{{ $item->name }}</h3>
                                <!-- End .cat-block-title -->
                            </a>
                        </div>
                        <!-- End .col-sm-4 col-lg-2 -->
                    @endforeach

                </div>
                <!-- End .row -->
            </div>
            <!-- End .cat-blocks-container -->
        </div>
        <!-- End .container -->

        <div class="mb-2"></div>
        <!-- End .mb-2 -->

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-13/banners/banner-1.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Weekend Sale</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a href="#">Lighting <br>& Accessories <br><span>25%
                                        off</span></a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .banner-content -->
                    </div>
                    <!-- End .banner -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-sm-6 col-lg-3 order-lg-last">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-13/banners/banner-3.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Smart Offer</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a href="#">Anniversary <br>Special <br><span>15%
                                        off</span></a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .banner-content -->
                    </div>
                    <!-- End .banner -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-13/banners/banner-2.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a>
                            </h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a href="#">Clothes Trending <br>Spring Collection
                                    2019 <br><span>from $12,99</span></a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .banner-content -->
                    </div>
                    <!-- End .banner -->
                </div>
                <!-- End .col-lg-6 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->

        <div class="mb-3"></div>
        <!-- End .mb-3 -->

        <div class="bg-light pt-3 pb-5">
            <div class="container">
                <div class="heading heading-flex heading-border mb-3">
                    <div class="heading-left">
                        <h2 class="title">Hot Deals Products</h2>
                        <!-- End .title -->
                    </div>
                    <!-- End .heading-left -->

                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="hot-all-link" data-toggle="tab" href="#hot-all-tab"
                                    role="tab" aria-controls="hot-all-tab" aria-selected="true">All</a>
                            </li>
                            @foreach ($category as $item)
                                <li class="nav-item">
                                    <a class="nav-link" id="hot-acc-link" data-toggle="tab"
                                        href="#hot-acc-{{ $item->id }}" role="tab"
                                        aria-controls="hot-acc-{{ $item->id }}"
                                        aria-selected="false">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End .heading-right -->
                </div>
                <!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="hot-all-tab" role="tabpanel"
                        aria-labelledby="hot-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1280": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>

                            @foreach ($product as $proItem)
                                <div class="product">
                                    <figure class="product-media">
                                        @if ($proItem->id % 4 == 0)
                                            <span class="product-label label-top">Top</span>
                                        @endif
                                        @if ($proItem->id % 3 == 0)
                                            <span class="product-label label-sale">Sale</span>
                                        @endif
                                        @if ($proItem->id % 5 == 0)
                                            <span class="product-label label-top">Top</span>
                                            <span class="product-label label-sale">Sale</span>
                                        @endif
                                        <a href="product.html">
                                            <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                                style="width: 100%; height: 190px;" alt="Product image"
                                                class="product-image">
                                        </a>
                                        @if ($proItem->id % 5 == 0)
                                            <div class="product-countdown" data-until="+9h" data-format="HMS"
                                                data-relative="true" data-labels-short="true"></div>
                                        @endif
                                        <!-- End .product-countdown -->

                                        <div class="product-action-vertical">
                                            <a href=""
                                                class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="" class="btn-product-icon btn-compare"
                                                title="Compare"><span>Compare</span></a>
                                            <a href="" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div>
                                        <!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                class="btn-product btn-cart" title="Add to cart"><span>add to
                                                    cart</span></a>
                                        </div>
                                        <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="">

                                                @foreach ($category as $catItem)
                                                    @if ($catItem->id == $proItem->parent_id)
                                                        {{ $catItem->name }}
                                                    @endif
                                                @endforeach
                                            </a>
                                        </div>
                                        <!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{ route('Detailsproduct', $proItem->id) }}">
                                                {{ $proItem->name }}</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price"> ${{ $proItem->price }}</span>
                                            <span class="old-price">Was ${{ $proItem->price * 1.3 }}</span>
                                        </div>
                                        <!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div>
                                            <!-- End .ratings -->
                                            <span class="ratings-text">( {{ rand(1, 12) }} Reviews )</span>
                                        </div>
                                        <!-- End .rating-container -->


                                        <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                </div>
                                <!-- End .product -->
                            @endforeach

                            <!-- End .product -->
                        </div>
                        <!-- End .owl-carousel -->
                    </div>
                    <!-- .End .tab-pane -->
                    @foreach ($category as $item)
                        <div class="tab-pane p-0 fade" id="hot-acc-{{ $item->id }}" role="tabpanel"
                            aria-labelledby="hot-acc-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl"
                                data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1280": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>

                                @foreach ($product as $proItem)
                                    @if ($item->id == $proItem->parent_id)
                                        <div class="product">
                                            <figure class="product-media">
                                                @if ($proItem->id % 3 == 0)
                                                <span class="product-label label-top">Top</span>
                                                <span class="product-label label-sale">Sale</span>
                                                @endif
                                                <a href="product.html">
                                                    <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                                        style="width: 100%; height: 190px;" alt="Product image"
                                                        class="product-image">
                                                </a>
                                                @if ($proItem->id % 4 == 0)


                                                <div class="product-countdown" data-until="+9h" data-format="HMS"
                                                    data-relative="true" data-labels-short="true"></div>
                                                <!-- End .product-countdown -->
                                                @endif
                                                <div class="product-action-vertical">
                                                    <a href=""
                                                        class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                            wishlist</span></a>
                                                    <a href="" class="btn-product-icon btn-compare"
                                                        title="Compare"><span>Compare</span></a>
                                                    <a href="" class="btn-product-icon btn-quickview"
                                                        title="Quick view"><span>Quick view</span></a>
                                                </div>
                                                <!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                        class="btn-product btn-cart" title="Add to cart"><span>add to
                                                            cart</span></a>
                                                </div>
                                                <!-- End .product-action -->
                                            </figure>
                                            <!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="">

                                                        @foreach ($category as $catItem)
                                                            @if ($catItem->id == $proItem->parent_id)
                                                                {{ $catItem->name }}
                                                            @endif
                                                        @endforeach
                                                    </a>
                                                </div>
                                                <!-- End .product-cat -->
                                                <h3 class="product-title"><a
                                                        href="{{ route('Detailsproduct', $proItem->id) }}">
                                                        {{ $proItem->name }}</a></h3>
                                                <!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price"> ${{ $proItem->price }}</span>
                                                    <span class="old-price">Was ${{ $proItem->price * 1.3 }}</span>
                                                </div>
                                                <!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div>
                                                    <!-- End .ratings -->
                                                    <span class="ratings-text">( {{ rand(1, 12) }} Reviews )</span>
                                                </div>
                                                <!-- End .rating-container -->


                                                <!-- End .product-nav -->
                                            </div>
                                            <!-- End .product-body -->
                                        </div>
                                        <!-- End .product -->
                                    @endif
                                @endforeach

                                <!-- End .product -->

                            </div>
                            <!-- End .owl-carousel -->
                        </div>
                    @endforeach
                    <!-- .End .tab-pane -->
                </div>
                <!-- End .tab-content -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .bg-light pt-5 pb-5 -->

        <div class="mb-3"></div>
        <!-- End .mb-3 -->
@if ($catrand!=null)

<div class="container electronics">
    <div class="heading heading-flex heading-border mb-3">
        <div class="heading-left">

            <h2 class="title">{{ $catrand->name }}</h2>
            <!-- End .title -->
        </div>
        <!-- End .heading-left -->

        <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="elec-new-link" data-toggle="tab" href="#elec-new-tab"
                        role="tab" aria-controls="elec-new-tab" aria-selected="true">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="elec-featured-link" data-toggle="tab" href="#elec-featured-tab"
                        role="tab" aria-controls="elec-featured-tab" aria-selected="false">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="elec-best-link" data-toggle="tab" href="#elec-best-tab"
                        role="tab" aria-controls="elec-best-tab" aria-selected="false">Best Seller</a>
                </li>
            </ul>
        </div>
        <!-- End .heading-right -->
    </div>
    <!-- End .heading -->

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel"
            aria-labelledby="elec-new-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                "nav": false,
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "480": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                    },
                    "1280": {
                        "items":5,
                        "nav": true
                    }
                }
            }'>
                @foreach ($product as $proItem)
                    @if ($proItem->parent_id == $catrand->id)
                        <div class="product">
                            <figure class="product-media">
                                @if ($proItem->id % 3 == 0)
                                <span class="product-label label-top">Top</span>
                                @endif                                        <a href="">
                                    <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                        style="width: 100%; height: 190px;" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#"
                                        class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                        class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                            view</span></a>
                                </div>
                                <!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                        class="btn-product btn-cart" title="Add to cart"><span>add to
                                            cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </figure>
                            <!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        @foreach ($category as $catItem)
                                            @if ($catItem->id == $proItem->parent_id)
                                                {{ $catItem->name }}
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <!-- End .product-cat -->
                                <h3 class="product-title"><a
                                        href="{{ route('Detailsproduct', $proItem->id) }}">{{ $proItem->name }}</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    ${{ $proItem->price }}
                                </div>
                                <!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div>
                                    <!-- End .ratings -->
                                    <span class="ratings-text">( {{ rand(1, 15) }} Reviews )</span>
                                </div>
                                <!-- End .rating-container -->
                            </div>
                            <!-- End .product-body -->
                        </div>
                    @endif
                @endforeach
                <!-- End .product -->

            </div>
            <!-- End .owl-carousel -->
        </div>
        <!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="elec-featured-tab" role="tabpanel"
            aria-labelledby="elec-featured-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                "nav": false,
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "480": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                    },
                    "1280": {
                        "items":5,
                        "nav": true
                    }
                }
            }'>
                @foreach ($product as $proItem)
                    @if ($proItem->parent_id == $catrand->id &&$proItem->id%2==0)
                        <div class="product">
                            <figure class="product-media">
                                @if ($proItem->id % 3 == 0)
                                <span class="product-label label-new">New</span>
                                @endif                                        <a href="">
                                    <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                        style="width: 100%; height: 190px;" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#"
                                        class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                        class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                            view</span></a>
                                </div>
                                <!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                        class="btn-product btn-cart" title="Add to cart"><span>add to
                                            cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </figure>
                            <!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        @foreach ($category as $catItem)
                                            @if ($catItem->id == $proItem->parent_id)
                                                {{ $catItem->name }}
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <!-- End .product-cat -->
                                <h3 class="product-title"><a
                                        href="{{ route('Detailsproduct', $proItem->id) }}">{{ $proItem->name }}</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    ${{ $proItem->price }}
                                </div>
                                <!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div>
                                    <!-- End .ratings -->
                                    <span class="ratings-text">( {{ rand(1, 15) }} Reviews )</span>
                                </div>
                                <!-- End .rating-container -->
                            </div>
                            <!-- End .product-body -->
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- End .owl-carousel -->
        </div>
        <!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="elec-best-tab" role="tabpanel" aria-labelledby="elec-best-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                "nav": false,
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "480": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                    },
                    "1280": {
                        "items":5,
                        "nav": true
                    }
                }
            }'>

                <!-- End .product-body -->
                @foreach ($product as $proItem)
                    @if ($proItem->parent_id == $catrand->id&&$proItem->id%2==1)
                        <div class="product">
                            <figure class="product-media">
                                @if ($proItem->id % 3 == 0)
                                <span class="product-label label-new">New</span>
                                @endif
                                <a href="">
                                    <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                        style="width: 100%; height: 190px;" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#"
                                        class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                        class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                            view</span></a>
                                </div>
                                <!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                        class="btn-product btn-cart" title="Add to cart"><span>add to
                                            cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </figure>
                            <!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        @foreach ($category as $catItem)
                                            @if ($catItem->id == $proItem->parent_id)
                                                {{ $catItem->name }}
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <!-- End .product-cat -->
                                <h3 class="product-title"><a
                                        href="{{ route('Detailsproduct', $proItem->id) }}">{{ $proItem->name }}</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    ${{ $proItem->price }}
                                </div>
                                <!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div>
                                    <!-- End .ratings -->
                                    <span class="ratings-text">( {{ rand(1, 15) }} Reviews )</span>
                                </div>
                                <!-- End .rating-container -->
                            </div>
                            <!-- End .product-body -->
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- End .owl-carousel -->
        </div>
        <!-- .End .tab-pane -->
    </div>
    <!-- End .tab-content -->
</div>
@endif
        <!-- End .container -->

        <div class="mb-3"></div>

        <!-- End .mb-3 -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner banner-overlay banner-overlay-light">
                        <a href="#">
                            <img src="assets/images/demos/demo-13/banners/banner-4.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle d-none d-sm-block"><a href="#">Spring Sale is Coming</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#">All Smart Watches <br>Discount <br><span
                                        class="text-primary">15% off</span></a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link banner-link-dark">Discover Now <i
                                    class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .banner-content -->
                    </div>
                    <!-- End .banner -->
                </div>
                <!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-13/banners/banner-5.png" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white  d-none d-sm-block"><a href="#">Amazing Value</a>
                            </h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a href="#">Headphones Trending <br>JBL Harman
                                    <br><span>from $59,99</span></a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .banner-content -->
                    </div>
                    <!-- End .banner -->
                </div>
                <!-- End .col-lg-6 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->

        <div class="mb-1"></div>
        <!-- End .mb-1 -->
        @foreach ($Catrandom as $CaRand)
            <div class="container furniture">
                <div class="heading heading-flex heading-border mb-3">
                    <div class="heading-left">
                        <h2 class="title">{{ $CaRand->name }}</h2>
                        <!-- End .title -->
                    </div>
                    <!-- End .heading-left -->

                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="furn-new-link" data-toggle="tab"
                                    href="#furn-new-{{ $CaRand->id }}" role="tab" aria-controls="furn-new-tab"
                                    aria-selected="true">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="furn-featured-link" data-toggle="tab"
                                    href="#furn-featured-{{ $CaRand->id }}" role="tab"
                                    aria-controls="furn-featured-tab" aria-selected="false">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="furn-best-link" data-toggle="tab"
                                    href="#furn-best-{{ $CaRand->id }}" role="tab" aria-controls="furn-best-tab"
                                    aria-selected="false">Best Seller</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End .heading-right -->
                </div>
                <!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="furn-new-{{ $CaRand->id }}" role="tabpanel"
                        aria-labelledby="furn-new-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1280": {
                                "items":5,
                                "nav": true
                            }
                        }
                    }'>
                            @foreach ($product as $proItem)
                                @if ($proItem->parent_id == $CaRand->id)
                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="">
                                                <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                                    style="width: 100%; height: 190px;" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                                <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                    class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                                        view</span></a>
                                            </div>
                                            <!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                    class="btn-product btn-cart" title="Add to cart"><span>add to
                                                        cart</span></a>
                                            </div>
                                            <!-- End .product-action -->
                                        </figure>
                                        <!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">
                                                    @foreach ($category as $catItem)
                                                        @if ($catItem->id == $proItem->parent_id)
                                                            {{ $catItem->name }}
                                                        @endif
                                                    @endforeach
                                                </a>
                                            </div>
                                            <!-- End .product-cat -->
                                            <h3 class="product-title"><a
                                                    href="{{ route('Detailsproduct', $proItem->id) }}">{{ $proItem->name }}</a>
                                            </h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                ${{ $proItem->price }}
                                            </div>
                                            <!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div>
                                                <!-- End .ratings -->
                                                <span class="ratings-text">( {{ rand(1, 15) }} Reviews )</span>
                                            </div>
                                            <!-- End .rating-container -->
                                        </div>
                                        <!-- End .product-body -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- End .owl-carousel -->
                    </div>
                    <!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="furn-featured-{{ $CaRand->id }}" role="tabpanel"
                        aria-labelledby="furn-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1280": {
                                "items":5,
                                "nav": true
                            }
                        }
                    }'>

                            @foreach ($product as $proItem)
                                @if ($proItem->parent_id == $CaRand->id&&$proItem->id%2==0)
                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="">
                                                <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                                    style="width: 100%; height: 190px;" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                                <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                    class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                                        view</span></a>
                                            </div>
                                            <!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                    class="btn-product btn-cart" title="Add to cart"><span>add to
                                                        cart</span></a>
                                            </div>
                                            <!-- End .product-action -->
                                        </figure>
                                        <!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">
                                                    @foreach ($category as $catItem)
                                                        @if ($catItem->id == $proItem->parent_id)
                                                            {{ $catItem->name }}
                                                        @endif
                                                    @endforeach
                                                </a>
                                            </div>
                                            <!-- End .product-cat -->
                                            <h3 class="product-title"><a
                                                    href="{{ route('Detailsproduct', $proItem->id) }}">{{ $proItem->name }}</a>
                                            </h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                ${{ $proItem->price }}
                                            </div>
                                            <!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div>
                                                <!-- End .ratings -->
                                                <span class="ratings-text">( {{ rand(1, 15) }} Reviews )</span>
                                            </div>
                                            <!-- End .rating-container -->
                                        </div>
                                        <!-- End .product-body -->
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <!-- End .owl-carousel -->
                    </div>
                    <!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="furn-best-{{ $CaRand->id }}" role="tabpanel"
                        aria-labelledby="furn-best-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1280": {
                                "items":5,
                                "nav": true
                            }
                        }
                    }'>


                            @foreach ($product as $proItem)
                                @if ($proItem->parent_id == $CaRand->id&&$proItem->id%2==1)
                                    <div class="product">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="">
                                                <img src="{{ asset('/product/image/' . $proItem->image) }}"
                                                    style="width: 100%; height: 190px;" alt="Product image"
                                                    class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare"><span>Compare</span></a>
                                                <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                    class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                                        view</span></a>
                                            </div>
                                            <!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="{{ route('Detailsproduct', $proItem->id) }}"
                                                    class="btn-product btn-cart" title="Add to cart"><span>add to
                                                        cart</span></a>
                                            </div>
                                            <!-- End .product-action -->
                                        </figure>
                                        <!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">
                                                    @foreach ($category as $catItem)
                                                        @if ($catItem->id == $proItem->parent_id)
                                                            {{ $catItem->name }}
                                                        @endif
                                                    @endforeach
                                                </a>
                                            </div>
                                            <!-- End .product-cat -->
                                            <h3 class="product-title"><a
                                                    href="{{ route('Detailsproduct', $proItem->id) }}">{{ $proItem->name }}</a>
                                            </h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                ${{ $proItem->price }}
                                            </div>
                                            <!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div>
                                                <!-- End .ratings -->
                                                <span class="ratings-text">( {{ rand(1, 15) }} Reviews )</span>
                                            </div>
                                            <!-- End .rating-container -->
                                        </div>
                                        <!-- End .product-body -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- End .owl-carousel -->
                    </div>
                    <!-- .End .tab-pane -->
                </div>
                <!-- End .tab-content -->
            </div>
            <!-- End .container -->

            <div class="mb-3"></div>
            <!-- End .mb-3 -->
        @endforeach


        <div class="container">
            <h2 class="title title-border mb-5">Shop by Brands</h2>
            <!-- End .title -->
            <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
                data-owl-options='{
                "nav": false,
                "dots": true,
                "margin": 30,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "420": {
                        "items":3
                    },
                    "600": {
                        "items":4
                    },
                    "900": {
                        "items":5
                    },
                    "1024": {
                        "items":6
                    },
                    "1280": {
                        "items":6,
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
                <a href="#" class="brand">
                    <img src="assets/images/brands/1.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/2.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/3.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/4.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/5.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/6.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/7.png" alt="Brand Name">
                </a>
            </div>
            <!-- End .owl-carousel -->
        </div>
        <!-- End .container -->

        <div class="cta cta-horizontal cta-horizontal-box bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2xl-5col">
                        <h3 class="cta-title text-white">Join Our Newsletter</h3>
                        <!-- End .cta-title -->
                        <p class="cta-desc text-white">Subcribe to get information about products and coupons</p>
                        <!-- End .cta-desc -->
                    </div>
                    <!-- End .col-lg-5 -->

                    <div class="col-3xl-5col">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control form-control-white"
                                    placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i
                                            class="icon-long-arrow-right"></i></button>
                                </div>
                                <!-- .End .input-group-append -->
                            </div>
                            <!-- .End .input-group -->
                        </form>
                    </div>
                    <!-- End .col-lg-7 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .cta -->

        <div class="blog-posts bg-light pt-4 pb-7">
            <div class="container">
                <h2 class="title">From Our Blog</h2>
                <!-- End .title-lg text-center -->

                <div class="owl-carousel owl-simple" data-toggle="owl"
                    data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "items": 3,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":3
                        },
                        "1280": {
                            "items":4,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>
                    @foreach ($blogs as $blog)
                        <article class="entry">
                            <figure class="entry-media">
                                <a href="">
                                    <img src="{{ asset('Events/img/' . $blog->event_img) }}"
                                        style="width:100%; height: 160px;" alt="image desc">
                                </a>
                            </figure>
                            <!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="">Nov 22, 2018</a>, 0 Comments
                                </div>
                                <!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="">{{ $blog->title }}</a>
                                </h3>
                                <!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>{{ $blog->description }} ...</p>
                                    <a class="read-more">Read More</a>
                                </div>
                                <!-- End .entry-content -->
                            </div>
                            <!-- End .entry-body -->
                        </article>
                        <!-- End .entry -->
                    @endforeach

                </div>
                <!-- End .owl-carousel -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .blog-posts -->
    </main>
    <!-- End .main -->

    <div id="google_translate_element"></div>
    <!-- مكان ظهور أداة الترجمة -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // لغة الموقع الأصلية
                includedLanguages: 'ar,en,fr,es', // اللغات المتاحة
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE // تخطيط الأداة
            }, 'google_translate_element');
        }
    </script>
    </div>

    @include('temp.footer')
@endsection
