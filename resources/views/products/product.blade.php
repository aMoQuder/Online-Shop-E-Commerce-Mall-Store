@extends('layouts.dashboardApp')

@section('content')
    <!--Main container start -->
    </div>

    <div class="mailbox-view-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-3 col-sm-3 col-xs-12 ">
                    <div class="hpanel responsive-mg-b-30 " style="margin-top:15px;">
                        <div class="panel-body">
                            <a href="{{ route('createProduct') }}" class="btn btn-success compose-btn btn-block m-b-md">add
                                product</a>
                            <ul class="mailbox-list">

                                <li>
                                    <a href="#"><i class="fa fa-pencil"></i> Draft</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-trash"></i> Trash</a>
                                </li>
                            </ul>

                            <hr>
                            <ul class="mailbox-list">
                                <li>
                                    <a href="#"><i class="fa fa-gears"></i> Settings</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-info-circle"></i> Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                    @if (session('massege'))
                        <h3 class="alert alert-alert-primary text-center" style="margin-bottom: 10px;">
                            {{ session('massege') }} </h3>
                    @endif
                    <div class="product-status mg-tb-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-status-wrap">
                                        <h4>Products List</h4>
                                        <div class="add-product">
                                            <a href="{{ route('createProduct') }}">Add Product</a>
                                        </div>
                                        <table>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Title</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>category</th>
                                                <th>Setting</th>
                                            </tr>
                                            @foreach ($product as $item)
                                                <tr>
                                                    <td><img src="{{ asset('/product/image/' . $item->image) }}"
                                                            alt="" /></td>
                                                    <td> {{ $item->name }}</td>
                                                    <td>
                                                        @if ($item->id % 4 == 0)
                                                            <button class="ps-setting">Paused</button>
                                                        @endif
                                                    </td>
                                                    <td> {{ $item->price }}</td>
                                                    <td>
                                                        @foreach ($category as $categoryitem)
                                                            @if ($categoryitem->id == $item->parent_id)
                                                                <h6>{{ $categoryitem->name }}</h6>
                                                            @endif
                                                        @endforeach

                                                    </td>
                                                    <td>
                                                        <a href="{{ route('updateproduct', $item->id) }}" title="Edit"
                                                            class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                        <a href="{{ route('deletproduct', $item->id) }}" title="Trash"
                                                            class="pd-setting-ed">
                                                            <z class="fa fa-trash-o" aria-hidden="true"></z>
                                                        </a>
                                                        <a href="{{ route('showproduct', $item->id) }}" title="show"
                                                            class="pd-setting-ed"><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <div class="custom-pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item {{ $product->onFirstPage() ? 'disabled' : '' }}">
                                                        <a class="page-link" href="{{ $product->previousPageUrl() }}"
                                                            aria-label="Previous" tabindex="-1"
                                                            aria-disabled="{{ $product->onFirstPage() ? 'true' : 'false' }}">
                                                            Prev
                                                        </a>
                                                    </li>


                                                    @foreach ($product->getUrlRange(1, $product->lastPage()) as $page => $url)
                                                        <li
                                                            class="page-item {{ $page == $product->currentPage() ? 'active' : '' }}">
                                                            <a class="page-link"
                                                                href="{{ $url }}">{{ $page }}</a>
                                                        </li>
                                                    @endforeach
                                                    <li
                                                        class="page-item {{ $product->hasMorePages() ? '' : 'disabled' }}">
                                                        <a class="page-link" href="{{ $product->nextPageUrl() }}">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
