@extends('layouts.dashboardApp')

@section('content')
    <!-- Basic Form Start -->
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
                                            <form  action="{{ route('events.save') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="old_description" value="{{$events->description}}">
                                                <input type="hidden" name="old_img" value="{{$events->event_img}}">
                                                <input type="hidden" name="old_id" value="{{$events->id}}">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">blog title</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input class="form-control" type="text" name="title" value="{{$events->title}}">
                                                                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">blog description</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <textarea class="form-control" name="description" placeholder=" {{$events->description}}" rows="6"> </textarea>

                                                                                                              </div>
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
                                                                <div class="input append-big-btn">
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

                                                            </div>
                                                            <img src="{{ asset('Events/img/' . $events->event_img) }}"class="w-100 "  id="image_preview"   style="height: 250px; margin: auto; margin-top:10px;" alt="">

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
