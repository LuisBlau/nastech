@extends('layouts.app')

@section('content')
    <!-- Page title -->
    <section id="page-title" class="text-light" data-bg-parallax="/media/1920_1280.jpg">
        <div class="container">
            <div class="page-title">
                <h1>Government</h1>
            </div>
            {{--<div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Pages</a>
                    </li>
                    <li class="active"><a href="#">Services</a>
                    </li>
                </ul>
            </div>--}}
        </div>
    </section>
    <!-- end: Page title -->
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>What we do</h2>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plug"></i></a>
                        </div>
                        <h3>Powerful template</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <a href="#"><i class="fa fa-desktop"></i></a>
                        </div>
                        <h3>Flexible Layouts</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Fast processing</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <a href="#"><i class="fa fa-trophy"></i></a>
                        </div>
                        <h3>Unlimited Colors</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <h3>Premium Sliders</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="background-grey">
        <div class="container">
            <div class="row carousel-description-clients carousel-description-style ">
                <div class="col-lg-4">
                    <div class="description">
                        <h2>Our Clients</h2> Aliquam enim enim, pharetra in sodales at, interdum sit amet dui. Nullam vulputate euis od urna non pharetra. Phasellus bland matt is ipsum, ac laoreet lorem lacinia et. interum sit amet dui.
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="carousel client-logos" data-items="4">
                        <div>
                            <a href="#"><img alt="" src="/media/clients/1.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/2.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/3.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/4.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/5.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/6.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/7.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/8.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/9.png">
                            </a>
                        </div>
                        <div>
                            <a href="#"><img alt="" src="/media/clients/10.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="call-to-action background-image p-t-100 p-b-100" style="background-image:url(/media/1920_1280.jpg)">
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

    <!-- About us -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h4>About us</h4>
                    <h2>Set your goals high, and don't stop till you get there.</h2>
                    <p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                    <a href="#services" class="btn btn-dark btn-outline btn-roundeded">Our Services</a>
                </div>

                <div class="col-lg-6 offset-1 m-t-40">
                    <div class="row">
                        <!-- features box -->
                        <div class="col-lg-6">
                            <h4>Fully Responsive</h4>
                            <p>We’re POLO, a creative agency located in the heart of New York city. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                        </div>
                        <!-- end: features box -->

                        <!-- features box -->
                        <div class="col-lg-6">
                            <h4>Tons of Options</h4>
                            <p>We’re POLO, a creative agency located in the heart of New York city. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                        </div>
                        <!-- end: features box -->

                        <!-- features box -->
                        <div class="col-lg-6">
                            <h4>Fast as light</h4>
                            <p>We’re POLO, a creative agency located in the heart of New York city. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                        </div>
                        <!-- end: features box -->

                        <!-- features box -->
                        <div class="col-lg-6">
                            <h4>Easy to Customize</h4>
                            <p>We’re POLO, a creative agency located in the heart of New York city. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                        </div>
                        <!-- end: features box -->
                    </div>
                </div>
                <!-- end features box -->
            </div>
        </div>
    </section>
    <!-- end: About us -->
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
