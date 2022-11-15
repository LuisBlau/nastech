@extends('layouts.app')

@section('content')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-halfscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide background-image" style="background-image:url('/media/webdev2.jpg');">
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <h2 class="text-lg m-b-0 text-white">BE POLO, BE SUCCESS</h2>
                    <h2 class="text-medium text-white">INTERNATIONAL COMPANY</h2>
                    <div>
                        <a class="btn btn-white btn-outline" href="#service">Explore more</a>
                        <a class="btn btn-white btn-outline" href="#">Purchase</a>
                    </div>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->
        <!-- Slide 2 -->
        <div class="slide background-image" style="background-image:url('/media/webdev3.jpg');">
            <div class="container">
                <div class="slide-captions text-start">
                    <!-- Captions -->
                    <h2 class="text-lg m-b-0 text-white">POLO<br /> CORPORATE</h2>
                    <h2 class="text-medium text-white">INTERNATIONAL COMPANY</h2>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->
        <!-- Slide 3 -->
        <div class="slide background-image" style="background-image:url('/media/webdev1.jpg');">
            <div class="container">
                <div class="slide-captions text-start">
                    <!-- Captions -->
                    <h2 class="text-lg m-b-0 text-dark">POLO<br /> CORPORATE</h2>
                    <h2 class="text-medium text-dark">INTERNATIONAL COMPANY</h2>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 3 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- SERVICES -->
    <section id="service" class="p-t-100">
        <div class="container">
            <div class="row">


                <div class="col-lg-4">
                    <div class="icon-box effect square medium color">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect square medium color">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Fast processing</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect square medium color">
                        <div class="icon">
                            <a href="#"><i class="fa fa-trophy"></i></a>
                        </div>
                        <h3>Unlimited Colors</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect square medium color">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <h3>Premium Sliders</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect square medium color">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect square medium color">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Fast processing</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SERVICES -->

    <!-- CALL TO ACTION -->
    <section class="row background-grey text-center">
        <div class="container">
            <h3>DO YOU LIKE WHAT YOU SEE</h3> <a href="#" class="btn btn-primary"><span>Buy POLO</span></a>
        </div>
    </section>
    <!-- CALL TO ACTION -->

    <!-- CLIENTS -->
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>OUR CLIENTS</h2>
                <span class="lead">Our awesome clients we've had the pleasure to work with! </span>
            </div>

            <ul class="grid grid-5-columns">
                <li>
                    <a href="#"><img src="images/clients/1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/3.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/4.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/5.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/6.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/7.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/8.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/9.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/clients/10.png" alt="">
                    </a>
                </li>
            </ul>

        </div>
    </section>
    <!-- CLIENTS -->
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
