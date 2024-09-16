@extends('layouts.dashboardApp')

@section('content')

    <div class="mailbox-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                    @if (session('success') == 'Order deleted successfully.')
                        @if (session('success'))
                            <h3 class="alert alert-danger text-center">{{ session('success') }} </h3>
                        @endif
                    @else
                        @if (session('success'))
                            <h3 class="alert alert-primary text-center">{{ session('success') }} </h3>
                        @endif
                    @endif
                    <div class="hpanel mg-b-15">
                        <div class="panel-heading hbuilt mailbox-hd">
                            <div class="text-center p-xs font-normal">
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm"
                                        placeholder="Search email in your inbox..."> <span class="input-group-btn"> <button
                                            type="button" class="btn btn-sm btn-default">Search
                                        </button> </span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 mg-b-15">
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i>
                                            Refresh</button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-exclamation"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-tag"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 mailbox-pagination mg-b-15">
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">


                                <table class="table table-hover table-mailbox">
                                    <thead>

                                        <th>User Name</th>
                                        <th>Total price</th>
                                        <th>status</th>
                                        <th>setting</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)                                            <tr class="unread active">

                                                <td><a href="">{{ $order->user->name }}</a></td>
                                                <td><a href="">${{ number_format($order->total_price, 2) }}</a>
                                                </td>
                                                <td>{{ ucfirst($order->status) }}</td>
                                                <td>
                                                    <div class=" " style="margin-bottom:8px; ">


                                                        <a href="{{ route('orders.show', $order->id) }}" title="edit"
                                                            class="pd-setting-ed"><i class="fa fa-eye-slash"></i></a>

                                                        <a href="{{ route('orders.destroy', $order->id) }}" title="edit"
                                                            class="pd-setting-ed"><i class="fa fa-trash"></i></a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <i class="fa fa-eye"> </i> {{ $orders->count() }} unread
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
