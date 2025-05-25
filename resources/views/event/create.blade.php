@extends('layouts.dashboardApp')

@section('content')
    <!-- Basic Form Start -->
</div>

    <div class="basic-form-area mg-tb-15">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>All Form Element</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form  action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">blog title</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input class="form-control" style="margin-bottom:7px;" type="text" name="title" placeholder="Enter blog title">
                                                            @error('title')
                                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                                        @enderror                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">blog description</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <textarea style="margin-bottom:7px;" class="form-control" name="description" placeholder="Enter Description" rows="7"> </textarea>

                                                            @error('description')
                                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                                        @enderror                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">File
                                                                Upload
                                                                System
                                                                for
                                                                blog</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                <div class="input append-big-btn" style="margin-bottom:7px;">
                                                                    <label class="icon-left" for="append-big-btn">
                                                                        <i class="fa fa-download"></i>
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse

                                                                            <input type="file" name="event_img" id="updateImage" onchange=" previewFile()"
                                                                            accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                                            multiple>
                                                                    </div>
                                                                    <input type="text" id="append-big-btn"
                                                                        placeholder="no file selected" />
                                                                </div>
                                                                @error('event_img')
                                                                <div class="alert alert-danger my-2">{{ $message }}</div>
                                                            @enderror
                                                            </div>
                                                            <img src="#"class="w-100 "  id="image_preview"   style="height: 250px; margin: auto; margin-top:10px;" alt="">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-white" type="submit">
                                                                        Cancel
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary login-submit-cs"
                                                                        type="submit">
                                                                        Save
                                                                        Change
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
    <!-- Basic Form End-->
@endsection
