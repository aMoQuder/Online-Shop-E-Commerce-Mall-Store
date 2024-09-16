@extends('layouts.dashboardApp')

@section('content')
<div class="blog-details-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-details-inner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="latest-blog-single blog-single-full-view">
                                <div class="blog-image">
                                    <a href="#"><img src="{{ asset('Events/img/' . $events->event_img) }}" class="show-blog-img"  alt="" />
                                        </a>
                                    <div class="blog-date">
                                        <p><span class="blog-day">20</span> May</p>
                                    </div>
                                </div>
                                <div class="blog-details blog-sig-details">
                                    <div class="details-blog-dt blog-sig-details-dt">
                                        <span><a href="#"><i class="fa fa-user"></i> By A Mollik</a></span>
                                        <span><a href="#"><i class="fa fa-heart"></i> 20 Likes</a></span>
                                        <span><a href="#"><i class="fa fa-comments-o"></i> 02 Comments</a></span>
                                    </div>
                                    
                            </div>
                            </div>
                        </div>
                    </div>

                   <div class="row">
                    <div class="hpanel email-compose mg-b-15">

                    <div class="panel-body no-padding">
                        <div class="summernote6">
                            <h5>Title : {{$events->title}}</h5>
                            <p>{{$events->description}}</p>
                            </p>
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