@extends('layouts.dashboardApp')

@section('content')
    <div class="container-fluid" style="padding-top: 15px; padding-bottom:15px;">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Review</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Review</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Review</h4>
                    </div>
                    <div class="widget-inner">

                        <div class=" admin-review "
                            style="    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                            padding-bottom: 30px;
                            margin-bottom: 30px;">
                            <div class="card-courses-full-dec">
                                <div class="card-courses-title">
                                    <h4>Product of {{ $order->user->name }} </h4>
                                </div>
                                <div class="card-courses-list-bx">
                                    <ul class="card-courses-view">
                                        <li class="card-courses-user">
                                            <div class="card-courses-user-pic">
                                                <img src="asset/images/testimonials/pic1.jpg" alt="" />
                                            </div>
                                            <div class="card-courses-user-info">
                                                <h5>Reviewer</h5>
                                                <h4> {{ $order->user->name }} </h4>
                                            </div>
                                        </li>
                                        <li class="card-courses-review">
                                            <h5>3 Review</h5>
                                            <ul class="cours-star bigdone">
                                                <li class="active done"><i class="fa fa-star"></i></li>
                                                <li class="active done"><i class="fa fa-star"></i></li>
                                                <li class="active done"><i class="fa fa-star"></i></li>
                                                <li class="done"><i class="fa fa-star "></i></li>
                                                <li class="done"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </li>
                                        <li class="card-courses-categories">
                                            <h5>Total price</h5>
                                            <h4>${{ number_format($order->total_price, 2) }}</h4>
                                        </li>
                                        <li class="card-courses-categories">
                                            <h5>status</h5>
                                            <h4>{{ ucfirst($order->status) }}</h4>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row card-courses-dec order">
                                    <div class="col-md-12 w-100">
                                        <h6 class="m-b10">Best Quality Product</h6>

                                        <div class="hpanel mg-b-15">

                                            <div class="panel-body">

                                                <div class="table-responsive">


                                                    <table class="table table-hover table-mailbox">
                                                        <thead>

                                                            <th>image</th>
                                                            <th>product</th>
                                                            <th>Quantity</th>
                                                            <th>price</th>
                                                            <th>size</th>
                                                            <th>color</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($order->items as $item)
                                                                <tr class="unread active" style="height: 50px;">

                                                                    <td><a href=""> <img
                                                                                src="{{ asset('/product/image/' . $item->image) }}"
                                                                                style="height: 40px; margin-left:5px;"
                                                                                class="img-fluid" alt="">
                                                                        </a></td>
                                                                    <td><a href="">{{ $item->name }}</a>
                                                                    </td>
                                                                    <td>{{ $item->quantity }}</td>
                                                                    <td>${{ number_format($item->price, 2) }}</td>
                                                                    <td>
                                                                        @if ($item->size !="")
                                                                            @foreach ($size as $sizeitem)
                                                                                @if ($sizeitem->id == $item->size)
                                                                                    {{ $sizeitem->name }}
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            No Size
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($item->color!="")
                                                                            @foreach ($color as $coloritem)
                                                                                @if ($coloritem->id == $item->color)
                                                                                    {{ $coloritem->name }}
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            No color
                                                                        @endif
                                                                    </td>

                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <i class="fa fa-eye"> </i>7 unread
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="btn" data-toggle="modal" data-target="#exampleModal">go
                                            back</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
@endsection
