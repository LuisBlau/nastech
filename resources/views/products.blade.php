@extends('layouts.app')

@section('content')
    <!-- Captions -->
    <section>
        <div class="container">
            <h2 class="fw-400 m-b-0">Everything is designed.</h2>
            <h2 class="fw-400">Few things are <span class="text-rotator fw-700" data-animation="flash" data-speed="3000">designed well.,designed simply.,designed better.</span></h2>
        </div>
    </section>
    <!-- end: Captions -->

    <!-- PORTFOLIO -->
    <section>
        <div class="container">
            <!-- Portfolio Filter -->
            <nav class="grid-filter gf-creative" data-layout="#portfolio">
                <ul>
                    <li class="active"><a href="#" data-category="*">Show All</a></li>
                    <li><a href="#" data-category=".ct-branding">Branding</a></li>
                    <li><a href="#" data-category=".ct-photography">Photography</a></li>
                    <li><a href="#" data-category=".ct-marketing">Marketing</a></li>
                    <li><a href="#" data-category=".ct-media">Media</a></li>
                    <li><a href="#" data-category=".ct-webdesign">Web design</a></li>
                </ul>
                <div class="grid-active-title">Show All</div>
            </nav>
            <!-- end: Portfolio Filter -->

            <!-- Portfolio -->
            <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="30">

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/31.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a title="Paper Pouch!" data-lightbox="image" href="/media/portfolio/31.png"><i class="fa fa-expand"></i></a>
                            <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/32.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Let's Go Outside</h3>
                                <span>Illustrations / Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/33.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Stockholm Fashion</h3>
                                <span>Illustrations / Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/34.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Stockholm Fashion</h3>
                                <span>Illustrations / Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/35.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Last Iceland Sunshine</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/36.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Iceland Sunshine</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/37.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Iceland Sunshine</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/38.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Graphics Sunshine</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/39.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Last Iceland Sunshine</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->


                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/40.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Towel World</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="/media/portfolio/41.png" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3>Towel World</h3>
                                <span>Graphics</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

            </div>
            <!-- end: Portfolio -->
        </div>
    </section>
    <!-- end: PORTFOLIO -->

    <!-- WHAT WE DO -->
    <section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section">
                <h2>WHAT WE DO</h2>
                <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="0">
                        <h4>Modern Design</h4>
                        <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="200">
                        <h4>Loaded with Features</h4>
                        <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="400">
                        <h4>Completely Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="600">
                        <h4>100% Responsive Layout</h4>
                        <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="800">
                        <h4>Clean Modern Code</h4>
                        <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="1000">
                        <h4>Free Updates & Support</h4>
                        <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WHAT WE DO -->
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
<script>
    @if (Session::has('status'))
    // $('#success').modal('show');
    console.log('xxx', '{!! Session::get('status') !!}');
    @endif
</script>
@endpush

@push('styles')
<style>
    .dark #mainMenu nav > ul > li > a, #mainMenu.dark nav > ul > li > a {
        color: #000;
    }
    .dark.sticky-active #mainMenu nav > ul > li > a, #mainMenu.dark.sticky-active nav > ul > li > a {
        color: #fff;
    }
    .dark .header-extras .p-dropdown a > span, .dark .header-extras a > i {
        color: #000;
    }
    .dark.sticky-active .header-extras .p-dropdown a > span, .dark.sticky-active .header-extras a > i {
        color: #fff;
    }
</style>
@endpush
