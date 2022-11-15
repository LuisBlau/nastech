@extends('layouts.app')

@section('content')
    <!-- SECTION IMAGE FULLSCREEN -->
    <section class="fullscreen" data-bg-video="/media/cloud.mp4">
        <div class="bg-overlay"></div>
        <div class="container-fluid">
            <div class="container-fullscreen">
                <div class="text-middle text-center text-light">
                    <i class="fa fa-bullseye"></i>
                    <h3 class="m-b-0">HTML5 VIDEO</h3>
                    <h2 class="text-medium m-t-0">VIDEO BACKGROUND</h2>
                    <p class="lead">We are Creative Agency from Melburne, Australia</p>
                    <a class="btn btn-light" href="#">Exoplore our World</a>
                </div>


            </div>
        </div>
    </section>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- Boxes -->
    <section id="section1" class="no-padding equalize" data-equalize-item=".text-box">
        <div class="row col-no-margin">
            <!--Box 1-->
            <div class="col-lg-3">
                <div class="text-box hover-effect text-dark" style="height: 330px;">
                    <a href="#"> <i class="fa fa-paper-plane"></i>
                        <h3>Tags &amp; Models </h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 1-->
            <!--Box 2-->
            <div class="col-lg-3">
                <div class="text-box hover-effect text-dark" style="height: 330px;">
                    <a href="#"> <i class="fas fa-chart-pie"></i>
                        <h3>Our charts </h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 2-->
            <!--Box 3-->
            <div class="col-lg-3">
                <div class="text-box hover-effect text-dark" style="height: 330px;">
                    <a href="#"> <i class="far fa-lightbulb"></i>
                        <h3>Light &amp; Dark</h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 3-->
            <!--Box 4-->
            <div class="col-lg-3">
                <div class="text-box hover-effect text-dark" style="height: 330px;">
                    <a href="#"> <i class="fa fa-language"></i>
                        <h3>RTL Support</h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 4-->
        </div>
    </section>
    <!-- end: Boxes -->

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

    <!-- PROCESS BOXES -->
    <section class="box-fancy section-fullwidth text-light">
        <div class="row">
            <div style="background-color: #3D4045" class="col-lg-4">
                <h1 class="text-lg text-uppercase">01.</h1>
                <h3>CONCEPT</h3>
                <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span>
            </div>

            <div style="background-color: #505358" class="col-lg-4">
                <h1 class="text-lg text-uppercase">02.</h1>
                <h3>DEVELOPMENT</h3>
                <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span>
            </div>

            <div style="background-color: #3D4045" class="col-lg-4">
                <h1 class="text-lg text-uppercase">03.</h1>
                <h3>TESTING</h3>
                <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span>
            </div>
        </div>
    </section>
    <!-- end: PROCESS BOXES -->
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
