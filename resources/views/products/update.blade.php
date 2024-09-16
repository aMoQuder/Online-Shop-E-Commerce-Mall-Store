@extends('layouts.dashboardApp')

@section('content')
    <!--Main container start -->

    <!--Main container start -->
    <div class="mailbox-view-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="hpanel responsive-mg-b-30">
                        <div class="panel-body">
                            <a href="{{ route('addcategory') }}" class="btn btn-success compose-btn btn-block m-b-md">Add
                                Category</a>
                            <ul class="mailbox-list">
                                <li>
                                    <a href="#">
                                        <span class="pull-right">12</span>
                                        <i class="fa fa-envelope"></i> Inbox
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


                    <div class="hpanel responsive-mg-b-30">
                        <div class="panel-body">
                            <form class="mail-compose"action="{{ route('saveProduct') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="old_id">
                                <input type="hidden" name="old_description" value="{{ $product->description}}">
                                <input type="hidden" name="old_image" value="{{ $product->image }}">



                                <div class="row px-3">


                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" value="{{ $product->name }}"
                                            name="name">

                                    </div>
                                    <div class="form-group  col-md-6">
                                        <input class="form-control" type="text" value="{{ $product->price }}"
                                            name="price">

                                    </div>

                                </div>

                                <div class="form-group row px-3">
                                    <label class="col-sm-2 col-form-label mt-1"
                                        style="    font-size: 18px;
                                    font-weight: 600;
                                    color: #595252b3;">category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" style="color: #2aa6df" name="parent_id">



                                            @foreach ($category as $cat)
                                                @if ($product->parent_id == $cat->id)
                                                    <option value="{{ $cat->id }}"> {{ $cat->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                            @foreach ($category as $cat)
                                                @if ($product->parent_id == $cat->id)
                                                    @continue
                                                @else
                                                    <option value="{{ $cat->id }}"> {{ $cat->name }}
                                                    </option>
                                                @endif
                                            @endforeach

                                        </select>

                                    </div>
                                </div>



                                <div class=" col-12 mt-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="admin-pro-accordion-wrap">

                                                <div class="panel-group adminpro-custon-design" id="accordion2">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading accordion-head p-0">
                                                            <h4 class="panel-title">
                                                                <a class="btn btn-danger " data-toggle="collapse"
                                                                    data-parent="#accordion2" href="#collapse4">
                                                                    Add Color</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse4" class="panel-collapse panel-ic collapse in">
                                                            <div class="panel-body admin-panel-content animated flash">
                                                                <div class="row">
                                                                    <!-- Your Profile Views Chart -->
                                                                    <div class="col-lg-12 m-b30">
                                                                        <div class="widget-box">
                                                                            <div class="email-wrapper">

                                                                                <div class="mail-list-container">

                                                                                    <div class="mail-box-list">


                                                                                        @foreach ($colors as $color)
                                                                                            <div
                                                                                                class="mail-list-info d-flex">
                                                                                                <div class="checkbox-list">
                                                                                                    <div
                                                                                                        class="custom-control custom-checkbox checkbox-st1">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="custom-control-input"
                                                                                                            name="color_id[]"
                                                                                                            value="{{ $color->id }}"
                                                                                                            id="check{{ $count }}">
                                                                                                        <label
                                                                                                            class="custom-control-label"
                                                                                                            for="check{{ $count++ }}"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mail-rateing mt-3">
                                                                                                    <span><i
                                                                                                            class="fa fa-star-o"></i></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mail-list-title">
                                                                                                    <h6>{{ $color->name }}
                                                                                                    </h6>
                                                                                                </div>



                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Your Profile Views Chart END-->
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <table id="item-addd"
                                                                            style="  width: 99%;
                                                                            margin-bottom: 9px;

                                                                            margin: auto;
                                                                        ">
                                                                            <div class="list-itemd"
                                                                                style="padding: 9px 17px; margin-top:5px;">
                                                                                <div class="row">
                                                                                    <div class="col-sm-10 ">
                                                                                        <label class="col-form-label">new
                                                                                            color</label>
                                                                                        <div>
                                                                                            <input class="form-control"
                                                                                                type="text"
                                                                                                name="colors[]">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-sm-2">
                                                                                        <label
                                                                                            class="col-form-label">Close</label>
                                                                                        <div class="form-group">
                                                                                            <button class="delete"
                                                                                                onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode.parentNode.parentNode)"><i
                                                                                                    class="fa fa-close"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </table>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <button type="button" class="btn btn-dark  "
                                                                            style="margin-left: 3px;"
                                                                            id="add-color-button"><i
                                                                                class="fa fa-fw fa-plus-circle"></i>Add
                                                                            Item</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="admin-pro-accordion-wrap">

                                                <div class="panel-group adminpro-custon-design" id="accordion3">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading accordion-head p-0">
                                                            <h4 class="panel-title">
                                                                <a class="btn btn-danger " data-toggle="collapse"
                                                                    data-parent="#accordion3" href="#collapse3">
                                                                    Add size</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse3" class="panel-collapse panel-ic collapse in">
                                                            <div class="panel-body admin-panel-content animated flash">
                                                                <div class="row">
                                                                    <!-- Your Profile Views Chart -->
                                                                    <div class="col-lg-12 m-b30">
                                                                        <div class="widget-box">
                                                                            <div class="email-wrapper">

                                                                                <div class="mail-list-container">

                                                                                    <div class="mail-box-list">


                                                                                        @foreach ($sizes as $size)
                                                                                            <div
                                                                                                class="mail-list-info d-flex">
                                                                                                <div class="checkbox-list">
                                                                                                    <div
                                                                                                        class="custom-control custom-checkbox checkbox-st1">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="custom-control-input"
                                                                                                            name="size_id[]"
                                                                                                            value="{{ $size->id }}"
                                                                                                            id="check{{ $size->id }}">
                                                                                                        <label
                                                                                                            class="custom-control-label"
                                                                                                            for="check{{ $size->id }}"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mail-rateing mt-3">
                                                                                                    <span><i
                                                                                                            class="fa fa-star-o"></i></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mail-list-title">
                                                                                                    <h6>{{ $size->name }}
                                                                                                    </h6>
                                                                                                </div>



                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Your Profile Views Chart END-->
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <table id="item-adddd"
                                                                            style="  width: 99%;
                                                                            margin-bottom: 9px;

                                                                            margin: auto;
                                                                        ">
                                                                            <div class="list-itemdd"
                                                                                style="padding: 9px 17px; margin-top:5px;">
                                                                                <div class="row">
                                                                                    <div class="col-sm-10 ">
                                                                                        <label class="col-form-label">new
                                                                                            size</label>
                                                                                        <div>
                                                                                            <input class="form-control"
                                                                                                id="demo"
                                                                                                type="text"
                                                                                                name="sizes[]">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-sm-2">
                                                                                        <label
                                                                                            class="col-form-label">Close</label>
                                                                                        <div class="form-group">
                                                                                            <button class="delete"
                                                                                                onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode.parentNode.parentNode)"><i
                                                                                                    class="fa fa-close"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </table>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <button type="button" class="btn btn-dark  "
                                                                            style="margin-left: 3px;"
                                                                            id="add-color-buttond"><i
                                                                                class="fa fa-fw fa-plus-circle"></i>Add
                                                                            Item</button>
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

                                <div class="form-group  col-12 mt-5">
                                    <label class="col-form-label">product description </label>
                                    <div>
                                        <textarea class="form-control" name="description" placeholder="{{ $product->description }}" rows="7"> </textarea>
                                    </div>

                                </div>

                                <div class="form-group-inner">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-big-btn">
                                                    <label class="icon-left" for="append-big-btn">
                                                        <i class="fa fa-download"></i>
                                                    </label>
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" name="image" id="updateImage"
                                                            onchange=" previewFile()"
                                                            accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                            multiple>
                                                    </div>
                                                    <input type="text" id="append-big-btn" value="no file selected">
                                                </div>
                                            </div>
                                            <img src="{{ asset('product/image/' . $product->image) }}" class="w-100 "
                                                id="image_preview"
                                                style="height: 250px; margin: auto; margin-top:10px; margin-bottom:10px;"
                                                alt="">

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-12 mt-3">
                                    <input type="submit" class="btn btn-lg w-100 btn-block form-control" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
