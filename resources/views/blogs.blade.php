@extends('layouts.app')

@section('content')
<!-- Content -->
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- post content -->
            <div class="content col-lg-9">
                <!-- Blog -->
                <div id="blog" class="grid-layout post-thumbnails post-1-columns m-b-30" data-item="post-item">
                    <!-- Post item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{url('/media/blog/12.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2>
                                    <a href="{{ route('blog') }}">
                                        Standard post with a single image
                                    </a>
                                </h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-slider">
                                <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                    <a href="{{url('/media/blog/11.jpg')}}" data-lightbox="gallery-image">
                                        <img alt="" src="{{url('/media/blog/16.jpg')}}">
                                    </a>
                                    <a href="{{url('/media/blog/16.jpg')}}" data-lightbox="gallery-image">
                                        <img alt="" src="{{url('/media/blog/11.jpg')}}">
                                    </a>
                                </div>
                                <span class="post-meta-category"><a href="">Technology</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category">Lifestyle</span>
                                <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item Vimeo-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-video">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://player.vimeo.com/video/198559065?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <span class="post-meta-category"><a href="">Video</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">Vimeo Video, this is a example post with Vimeo video</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item Vimeo-->
                    <!-- Post item YouTube-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
                                <span class="post-meta-category"><a href="">Video</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">YouTube Video, this is a example post with YouTube</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item YouTube-->
                    <!-- Post item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{url('/media/blog/17.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item HTML5 Audio-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-audio">
                                <a href="#">
                                    <img alt="" src="{{url('/media/blog/audio-bg.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Audio</a></span>
                                <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                    <source src="audio/beautiful-optimist.mp3" type="audio/mp3" />
                                </audio>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item SoundCloud-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-audio">
                                <iframe width="100%" height="227" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/172245994&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                                <span class="post-meta-category"><a href="">Audio</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">SoundCloud Audio</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Post item HTML5 Video-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-video">
                                <video class="video-js" controls preload="false" poster="video/Water-Park/Water-Park.jpg">
                                    <source src="video/Water-Park/Water-Park.mp4" type="video/mp4" />
                                    <source src="video/Water-Park/Water-Park.webm" type="video/webm" />
                                </video>
                                <span class="post-meta-category"><a href="">Video</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">Self Hosted HTML5 Video, this is a example post with HTML5 Video</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Blog -->
                <!-- Load next portfolio items -->
                <div id="pagination" class="infinite-scroll">
                    <a href="blog-left-image-load-more-2.html"></a>
                </div>
                <!-- end:Load next portfolio items -->
                <!-- Show more posts Button -->
                <div id="showMore">
                    <a href="#" class="btn btn-roundeded btn-light"><i class="icon-refresh-cw"></i> Load More Posts</a>
                </div>
                <!-- end: Show more posts Button -->
            </div>
            <!-- end: post content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-lg-3">
                <!--Tabs with Posts-->
                <div class="widget ">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{url('/media/blog/thumbnail/5.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{url('/media/blog/thumbnail/6.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{url('/media/blog/thumbnail/7.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End: Tabs with Posts-->
                <!-- Twitter widget -->
                <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                    <h4 class="widget-title">Recent Tweets</h4>
                </div>
                <!-- end: Twitter widget-->
                <!--widget tags -->
                <div class="widget  widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                        <a href="#">Branding</a>
                        <a href="#">HTML</a>
                        <a href="#">Clean</a>
                        <a href="#">Peace</a>
                        <a href="#">Love</a>
                        <a href="#">CSS3</a>
                        <a href="#">jQuery</a>
                    </div>
                </div>
                <!--end: widget tags -->
                <!--widget newsletter-->
                <div class="widget  widget-newsletter">
                    <form class="widget-subscribe-form" novalidate action="#" role="form" method="post">
                        <h4 class="widget-title">Newsletter</h4>
                        <small>Stay informed on our latest news!</small>
                        <div class="input-group">
                            <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <span class="input-group-btn">
                                <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                            </span> </div>
                    </form>
                </div>
                <!--end: widget newsletter-->
            </div>
            <!-- end: Sidebar-->
        </div>
    </div>
</section>
<!-- end: Content -->
@endsection

@push('modal')
<div id="success" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: rgba(0, 0, 0, 0.8);">
        <div class="modal-body">
          <button type="button" class="close text-white float-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          @if (Session::has('status'))
          <h3 class="font-weight-bold mb-0 p-4 text-white">Success!</h3>
          <h5 class="font-weight-bold px-4 text-white">{!! Session::get('status') !!}</h5>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
</div>
@endpush

@push('scripts')
<!--Infinite Scroll plugin files-->
<script src="/plugins/metafizzy/infinite-scroll.min.js"></script>

<script>
    @if (Session::has('status'))
    // $('#success').modal('show');
    console.log('xxx', '{!! Session::get('status') !!}');
    @endif
</script>
@endpush
