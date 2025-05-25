@extends('layouts.dashboardApp')


@section('content')
</div>

    <div class="product-cart-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    @if (session('massege'))
                        <h3 class="alert alert-alert-primary text-center" style="margin-bottom: 10px;">
                            {{ session('massege') }} </h3>
                    @endif
                    <div class="product-cart-inner">
                        <div id="example-basic">
                            <section>
                                <h3 class="product-cart-dn">blog</h3>
                                <div class="product-list-cart">
                                    <div class="product-status-wrap border-pdt-ct">
                                        <table>

                                            <tr class="centerblog">
                                                <th>Image</th>
                                                <th>blog Title</th>

                                                <th>Action</th>
                                            </tr>

                                            @foreach ($blogs as $blog)
                                                <tr class="centerblog">
                                                    <td class="blog-img"><img
                                                            src="{{ asset('Events/img/' . $blog->event_img) }}"
                                                            alt="" class="" /></td>
                                                    <td>
                                                        <h3>blog Title {{ $blog->id }}</h3>
                                                        <p>{{ $blog->title }}</p>
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('eventsEdit', $blog->id) }}"
                                                            data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="{{ route('eventsDelete', $blog->id) }}" data-toggle="tooltip"
                                                            title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o"
                                                                aria-hidden="true"></i></a>
                                                        <a href="{{ route('eventsShow', $blog->id) }}" data-toggle="tooltip"
                                                            title="show" class="pd-setting-ed"><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
