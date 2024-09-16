@extends('layouts.app')
@include('temp.navbarApp')
@section('content')
    <!-- Cart Start -->
    <main class="main">

        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Classic</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        @foreach ($blogs as $blog)
                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="">
                                        <img src="{{ asset('Events/img/' . $blog->event_img) }}" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                            by <a href="#">John Doe</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">Nov 22, 2018</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">2 Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a>{{ $blog->title }}</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        in <a href="#">Lifestyle</a>,
                                        <a href="#">Shopping</a>
                                    </div><!-- End .entry-cats -->

                                    <div class="entry-content">
                                        <p>{{ $blog->description }}</p>
                                        <a class="read-more">Continue Reading</a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        @endforeach
                     

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <!-- زر السابق -->
                                <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link page-link-prev" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous" tabindex="-1" aria-disabled="{{ $blogs->onFirstPage() ? 'true' : 'false' }}">
                                        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                    </a>
                                </li>

                                <!-- أزرار الصفحات -->
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                <!-- إظهار العدد الكلي للصفحات -->
                                <li class="page-item-total">of {{ $blogs->lastPage() }}</li>

                                <!-- زر التالي -->
                                <li class="page-item {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link page-link-next" href="{{ $blogs->nextPageUrl() }}" aria-label="Next">
                                        Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->

                    <aside class="col-lg-3">
                        <div class="sidebar">
                            <div class="widget widget-search">
                                <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                                <form action="#">
                                    <label for="ws" class="sr-only">Search in blog</label>
                                    <input type="search" class="form-control" name="ws" id="ws"
                                        placeholder="Search in blog" required>
                                    <button type="submit" class="btn"><i class="icon-search"></i><span
                                            class="sr-only">Search</span></button>
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-cats">
                                <h3 class="widget-title">Categories</h3><!-- End .widget-title -->

                                <ul>
                                    <li><a href="#">Lifestyle<span>3</span></a></li>
                                    <li><a href="#">Shopping<span>3</span></a></li>
                                    <li><a href="#">Fashion<span>1</span></a></li>
                                    <li><a href="#">Travel<span>3</span></a></li>
                                    <li><a href="#">Hobbies<span>2</span></a></li>
                                </ul>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->

                                <ul class="posts-list">

                                    @foreach ($blogs as $blog)
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('Events/img/' . $blog->event_img) }}" alt="post" class="img-fluid imgdone">
                                                </a>
                                            </figure>

                                            <div>
                                                <span>Nov 25, 2018</span>
                                                <h4><a> {{ $blog->title }}</a></h4>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul><!-- End .posts-list -->
                            </div><!-- End .widget -->

                            <div class="widget widget-banner-sidebar">
                                <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                                <div class="banner-sidebar banner-overlay">
                                    <a href="#">
                                        <img src="assets/images/blog/sidebar/banner.jpg" alt="banner">
                                    </a>
                                </div><!-- End .banner-ad -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Browse Tags</h3><!-- End .widget-title -->

                                <div class="tagcloud">
                                    <a href="#">fashion</a>
                                    <a href="#">style</a>
                                    <a href="#">women</a>
                                    <a href="#">photography</a>
                                    <a href="#">travel</a>
                                    <a href="#">shopping</a>
                                    <a href="#">hobbies</a>
                                </div><!-- End .tagcloud -->
                            </div><!-- End .widget -->

                            <div class="widget widget-text">
                                <h3 class="widget-title">About Blog</h3><!-- End .widget-title -->

                                <div class="widget-text-content">
                                    <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, pulvinar nunc
                                        sapien ornare nisl.</p>
                                </div><!-- End .widget-text-content -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
    @include('temp.footer')
@endsection
