@extends('layouts.app')

@section('content')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider" data-height-xs="360">

        <!-- Slide 1 -->
        <div class="slide" data-bg-video="/media/cyber.mp4">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h2 class="text-light">Creative Studio</h2>
                    <h4 class="m-b-40 text-light">Set your goals high, and don't stop till you get there.</h4>
                    <button type="button" class="btn btn-light btn-outline">Explore more</button>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- About us -->
    <section id="section-about">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="row">
                        <!-- features box -->
                        <div class="col-lg-6">
                            <h4>About us</h4>
                            <p>We’re POLO, a creative agency located in the heart of New York city. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                            <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                        </div>
                        <!-- end: features box -->

                        <!-- Progress bar -->
                        <div class="col-lg-6">
                            <h4>A Unique Experience</h4>
                            <p>We’re POLO, a creative agency located in the heart of New York city. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                            <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu.</p>
                        </div>
                        <!-- end: Progress bar -->
                    </div>
                </div>
                <!-- end features box -->
            </div>
        </div>
    </section>
    <!-- end: About us -->

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
