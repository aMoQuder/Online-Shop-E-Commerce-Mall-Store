@extends('layouts.app')

@section('content')
    @include('temp.navbarApp')
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        @if (session('message'))
                            <h3 class="alert alert-alert-primary text-center" style="margin-bottom: 10px;">
                                {{ session('message') }}
                            </h3>
                        @endif
                        <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    Showing {{ $products->count() }} of {{ $products->total() }} Products
                                </div>
                            </div>
                        </div>

                        <div class="products mb-3">
                            <div class="row justify-content-center" id="product-list">
                                @foreach ($products as $product)
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 product-item"
                                        data-category="{{ $product->parent_id }}"
                                        data-colors="{{ implode(',', $product->color_id) }}"
                                        data-sizes="{{ implode(',', $product->size_id) }}">
                                        <div class="product product-1 text-center">
                                            <figure class="product-media">
                                                @if ($product->id % 3 == 0)
                                                    <span class="product-label label-new">New</span>
                                                @endif
                                                <a href="{{ route('Detailsproduct', $product->id) }}">
                                                    <img src="{{ asset('/product/image/' . $product->image) }}"
                                                        alt="Product image" style="height: 160px; width: 100%;"
                                                        class="product-image">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="{{ route('Detailsproduct', $product->id) }}"
                                                        class="btn-product-icon btn-wishlist btn-expandable"><span>Add to
                                                            Wishlist</span></a>
                                                    <a href="" class="btn-product-icon btn-quickview"
                                                        title="Quick view"><span>Quick View</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare"
                                                        title="Compare"><span>Compare</span></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="{{ route('Detailsproduct', $product->id) }}"
                                                        class="btn-product btn-cart"><span>Add to Cart</span></a>
                                                </div>
                                            </figure>
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    @foreach ($categories as $category)
                                                        @if ($category->id == $product->parent_id)
                                                            <a
                                                                href="{{ route('Detailsproduct', $product->id) }}">{{ $category->name }}</a>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <h3 class="product-title"><a
                                                        href="{{ route('Detailsproduct', $product->id) }}">{{ $product->name }}</a>
                                                </h3>


                                                <div class="product-price">{{ $product->price }}</div>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div>
                                                    </div>
                                                    <span class="ratings-text">(2 Reviews)</span>
                                                </div>
                                                @if ($product->parent_id == 11)
                                                    <div class="product-nav product-nav-thumbs">
                                                        <a href="{{ route('Detailsproduct', $product->id) }}"
                                                            class="active"><img
                                                                src="assets/images/products/product-4-thumb.jpg"
                                                                alt="product desc"></a>
                                                        <a href="{{ route('Detailsproduct', $product->id) }}"><img
                                                                src="assets/images/products/product-4-2-thumb.jpg"
                                                                alt="product desc"></a>
                                                        <a href="{{ route('Detailsproduct', $product->id) }}"><img
                                                                src="assets/images/products/product-4-3-thumb.jpg"
                                                                alt="product desc"></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <!-- Previous button -->
                                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link page-link-prev" href="{{ $products->previousPageUrl() }}"
                                        aria-label="Previous" tabindex="-1"
                                        aria-disabled="{{ $products->onFirstPage() ? 'true' : 'false' }}">
                                        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                    </a>
                                </li>

                                <!-- Page buttons -->
                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                <!-- Total page count -->
                                <li class="page-item-total">of {{ $products->lastPage() }}</li>

                                <!-- Next button -->
                                <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link page-link-next" href="{{ $products->nextPageUrl() }}"
                                        aria-label="Next">
                                        Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <div class="widget widget-clean">
                                <label>Filters:</label>
                                <a href="#" class="sidebar-filter-clear">Clean All</a>
                            </div>


                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                        aria-controls="widget-1">Category</a>
                                </h3>
                                <div class="collapse show" id="widget-1">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            @foreach ($categories as $category)
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input filter-category"
                                                            id="cat-{{ $category->id }}" value="{{ $category->id }}">
                                                        <label class="custom-control-label"
                                                            for="cat-{{ $category->id }}">{{ $category->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true"
                                        aria-controls="widget-2">Size</a>
                                </h3>
                                <div class="collapse show" id="widget-2">
                                    <div class="widget-body">
                                        <div class="filter-items">
                                            @foreach ($sizes as $size)
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input filter-size"
                                                            id="size-{{ $size->id }}" value="{{ $size->id }}">
                                                        <label class="custom-control-label"
                                                            for="size-{{ $size->id }}">{{ $size->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-collapsible">

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true"
                                            aria-controls="widget-3">Color</a>
                                    </h3>
                                    <div class="collapse show" id="widget-3">
                                        <div class="widget-body">
                                            <div class="filter-items">
                                                @foreach ($colors as $color)
                                                    <div class="filter-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                class="custom-control-input filter-color"
                                                                id="color-{{ $color->id }}"
                                                                value="{{ $color->id }}">
                                                            <label class="custom-control-label"
                                                                for="color-{{ $color->id }}">{{ $color->name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </aside>
                </div>
            </div>
        </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filters = document.querySelectorAll('.filter-item input');
            filters.forEach(filter => {
                filter.addEventListener('change', function() {
                    const form = document.createElement('form');
                    form.method = 'GET';
                    form.action = '{{ route('shop') }}';

                    filters.forEach(filter => {
                        if (filter.checked) {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = filter.classList.contains('filter-category') ?
                                'categories[]' :
                                filter.classList.contains('filter-color') ? 'colors[]' :
                                filter.classList.contains('filter-size') ? 'sizes[]' : '';
                            input.value = filter.value;
                            form.appendChild(input);
                        }
                    });

                    document.body.appendChild(form);
                    form.submit();
                });
            });
        });
    </script>
@endsection
