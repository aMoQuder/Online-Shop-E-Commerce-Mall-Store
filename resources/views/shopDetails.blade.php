@extends('layouts.app')
@include('temp.navbarApp')
@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Centered</li>
                </ol>

                <!-- End .pager-nav -->
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="{{ asset('/product/image/' . $product->image) }}"
                                            data-zoom-image="{{ asset('/product/image/' . $product->image) }}"
                                            alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        <a class="product-gallery-item active" href="#"
                                            data-image="{{ asset('/product/image/' . $product->image) }}"
                                            data-zoom-image="{{ asset('/product/image/' . $product->image) }}">
                                            <img src="{{ asset('/product/image/' . $product->image) }}" alt="product side">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('/product/image/' . $product->image) }}"
                                            data-zoom-image="{{ asset('/product/image/' . $product->image) }}">
                                            <img src="{{ asset('/product/image/' . $product->image) }}" alt="product cross">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('/product/image/' . $product->image) }}"
                                            data-zoom-image="{{ asset('/product/image/' . $product->image) }}">>
                                            <img src="{{ asset('/product/image/' . $product->image) }}"
                                                alt="product with model">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('/product/image/' . $product->image) }}"
                                            data-zoom-image="{{ asset('/product/image/' . $product->image) }}">
                                            <img src="{{ asset('/product/image/' . $product->image) }}" alt="product back">
                                        </a>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">

                            <div class="product-details product-details-centered">
                                <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Hidden field for cart_id -->
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <!-- Hidden field for cart_id -->
                                    <input type="hidden" name="cart_id" value="{{ session('cart_id') }}">

                                    <!-- Hidden field for product image -->
                                    <input type="hidden" name="image" value="{{ $product->image }}">

                                    <!-- Hidden field for product_id -->
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <!-- Hidden field for product_id -->
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews
                                            )</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        ${{ $product->price }}
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p>{{ $product->description_en }}.</p>
                                    </div><!-- End .product-content -->

                                    <div class="details-filter-row details-row-size">
                                        <label for="size">Size:</label>
                                        <div class="select-custom">
                                            <select name="size" id="size" class="form-control">
                                                <option value="#" selected="selected">One Size</option>

                                                @foreach ($size as $sizees)
                                                    @foreach ($product->size_id as $siz_id)
                                                        @if ($sizees->id == $siz_id)
                                                            <option value="{{$sizees->id}}">{{ $sizees->name }}</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach

                                            </select>
                                        </div><!-- End .select-custom -->
                                        <label class="ml-3" for="size">color:</label>
                                        <div class="select-custom">
                                            <select name="color" id="size" class="form-control">
                                                <option value="#" selected="selected">One color</option>

                                                @foreach ($color as $colores)
                                                    @foreach ($product->color_id as $colo_id)
                                                        @if ($colores->id == $colo_id)
                                                            <option value="{{$sizees->id}}">{{ $colores->name }}</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach

                                            </select>
                                        </div><!-- End .select-custom -->

                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <div class="details-action-col">
                                            <div class="product-details-quantity">
                                                <input type="number" id="qty" name="quantity"
                                                    class="form-control" value="1" min="1" step="1"
                                                    data-decimals="0" required>
                                            </div><!-- End .product-details-quantity -->

                                            <button type="submit" class="btn-product btn-cart"><span>add to
                                                    cart</span></button>
                                        </div><!-- End .details-action-col -->

                                        <!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="#">Women</a>,
                                            <a href="#">Dresses</a>,
                                            <a href="#">Yellow</a>
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                    class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                                    class="icon-pinterest"></i></a>
                                        </div>
                                    </div>
                                </form>
                                <!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->



                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
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
                        "1200": {
                            "items":4,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>

                    @foreach ($allproduct as $allitem)
                        @if ($allitem->parent_id == $product->parent_id)
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/product/image/' . $allitem->image) }}" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="{{ route('Detailsproduct', $allitem->id) }}"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                        <a href="" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare"
                                            title="Compare"><span>Compare</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="{{ route('Detailsproduct', $allitem->id) }}"
                                            class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        @foreach ($category as $cat)
                                            @if ($allitem->parent_id == $cat->id)
                                                <a>{{ $cat->name }}</a>
                                            @endif
                                        @endforeach
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a
                                            href="{{ route('Detailsproduct', $allitem->id) }}">{{ $allitem->name }}</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        ${{ $allitem->price }}
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #cc9966;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #806b3e;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endif
                    @endforeach


                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
    @include('temp.footer')

@endsection
