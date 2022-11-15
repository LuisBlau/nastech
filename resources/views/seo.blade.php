@extends('layouts.app')

@section('content')
    <!-- SECTION IMAGE FULLSCREEN -->
    <section class="fullscreen" data-bg-parallax="/media/seo.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="container-fullscreen">
                <div class="text-middle">
                    <div class="text-light" style="">
                        <h4 class="text-uppercase m-b-0">Polo is Friendly!</h4>
                        <h1 class="text-uppercase text-lg">Worldwide <br>Business<br> Company!</h1>
                        <a href="#service" class="btn btn-red">Explore Polo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- IMAGE BLOCK -->
    <section id="image-block" class="image-block no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="height:609px;background:url(/media/seo2.jpg) 50% 50% / cover no-repeat;">
                </div>
                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <h2>THE COMPANY</h2>
                        <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
                                <br /><br />
                                Beautiful nature, and rare feathers!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla
                            </span>
                    </div>
                    <a href="#" class="btn btn-outline btn-dark"><span>Learn More</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: IMAGE BLOCK -->

    <!-- IMAGE BLOCK 2 -->
    <section id="image-block2" class="image-block no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-t-20 text-center">
                        <h4 class="m-b-10">Know More About Our Company</h4>
                        <h1 class="text-medium text-uppercase">Why Choose Us</h1>
                        <p class="lead m-b-60">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel
                        </p>
                    </div>

                    <div class="sepe"></div>

                    <div class="col-lg-12">

                        <div class="p-progress-bar-container title-up extra-small color">
                            <div class="p-progress-bar" data-percent="100" data-delay="0" data-type="%">
                                <div class="progress-title">HTML5</div>
                            </div>
                        </div>

                        <div class="p-progress-bar-container title-up extra-small color">
                            <div class="p-progress-bar" data-percent="94" data-delay="100" data-type="%">
                                <div class="progress-title">CSS3</div>
                            </div>
                        </div>

                        <div class="p-progress-bar-container title-up extra-small color">
                            <div class="p-progress-bar" data-percent="89" data-delay="200" data-type="%">
                                <div class="progress-title">JQUERY</div>
                            </div>
                        </div>

                        <div class="p-progress-bar-container title-up extra-small color">
                            <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                                <div class="progress-title">MYSQL</div>
                            </div>
                        </div>

                        <div class="p-progress-bar-container title-up extra-small color">
                            <div class="p-progress-bar" data-percent="75" data-delay="400" data-type="%">
                                <div class="progress-title">PHP</div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6" style="height:609px;background:url(/media/seo1.jpg) 50% 50% / cover no-repeat;">
                </div>

            </div>
        </div>
    </section>
    <!-- end: IMAGE BLOCK 2 -->

    <!-- CALL TO ACTION -->
    <div class="call-to-action background-image p-t-80 p-b-80" style="background-image:url(/media/1920_1280.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h3 class="text-light">Join by April 27 and <span>Win $200</span> in Programs and Services</h3>
                    <p class="text-light">This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p>
                </div>
                <div class="col-lg-2"> <a class="btn btn-light btn-outline">Call us now!</a> </div>
            </div>
        </div>
    </div>
    <!-- end: CALL TO ACTION -->

    <!-- SERVICES -->
    <section id="service">
        <div class="container">
            <div class="heading-text heading-section">
                <h2>OUR SERVICES</h2>
                <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
            </div>

            <div class="row">
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plug"></i></a>
                        </div>
                        <h3>Powerful template</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-desktop"></i></a>
                        </div>
                        <h3>Flexible Layouts</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>

                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Fast processing</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-trophy"></i></a>
                        </div>
                        <h3>Unlimited Colors</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <h3>Premium Sliders</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>

                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-rocket"></i></a>
                        </div>
                        <h3>Modern Design</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-flask"></i></a>
                        </div>
                        <h3>Clean Modern Code</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-umbrella"></i></a>
                        </div>
                        <h3>Free Updates & Support</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end: SERVICES -->

    <!-- Contact -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="m-b-10">Get in Touch with Us</h2>
                            <p class="lead">Our Headquarters are in Australia, USA, Europe, Asia, Africa </p>
                        </div>
                        <div class="col-lg-6 m-b-30">
                            <address>
                                <strong>Headquarters:</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                            </address>
                            <strong>Phone:</strong> (+1) 1234 56789
                            <br>
                            <strong>Fax:</strong> (+1) 12 3456 78910
                            <br>
                            <strong>Email:</strong> info@inspiro-media.com
                        </div>
                        <div class="col-lg-6 m-b-30">
                            <address>
                                <strong>Headquarters:</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                            </address>
                            <strong>Phone:</strong> (+1) 1234 56789
                            <br>
                            <strong>Fax:</strong> (+1) 12 3456 78910
                            <br>
                            <strong>Email:</strong> info@inspiro-media.com
                        </div>
                        <div class="col-lg-12 m-b-30">
                            <h4>We are social</h4>
                            <div class="social-icons social-icons-light social-icons-colored-hover">
                                <ul>
                                    <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="social-behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li class="social-flickr"><a href="#"><i class="fab fa-flickr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="phone">Phone</label>
                                <input type="text" aria-required="true" name="widget-contact-form-phone" class="form-control required phone" placeholder="Enter your Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="8" class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-light" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact -->
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
