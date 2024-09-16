@extends('layouts.dashboardApp')

@section('content')
    <!--Main container start -->


    <div class="mailbox-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="hpanel responsive-mg-b-30">
                        <div class="panel-body">

                            <ul class="mailbox-list">
                                <li class="active">
                                    <a  href="{{ route('createUser') }}">
                                        <span class="pull-right">12</span>
                                        <i class="fa fa-envelope"></i> Add User
                                    </a>
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
                    @if (session('massege') == 'Deleted Successfully For User')
                        @if (session('massege'))
                            <h3 class="alert alert-danger text-center">{{ session('massege') }} </h3>
                        @endif
                    @else
                        @if (session('massege'))
                            <h3 class="alert alert-primary text-center">{{ session('massege') }} </h3>
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
                                        <th>User E-mail</th>
                                        <th>status</th>
                                        <th>role</th>
                                        <th>setting</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr class="unread active">

                                                <td><a href="">{{ $item->name }}</a></td>
                                                <td><a href="">{{ $item->email }}</a></td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td>
                                                    <div class=" " style="margin-bottom:8px;">

                                                        <a href="{{ route('deletuser', $item->id) }}" title="trash"
                                                            class="pd-setting-ed">
                                                            <z class="fa fa-trash-o" aria-hidden="true"></z>
                                                        </a>
                                                        <a href="{{ route('editUser', $item->id) }}" title="edit"
                                                            class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <i class="fa fa-eye"> </i> {{$user->count()}} unread
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
