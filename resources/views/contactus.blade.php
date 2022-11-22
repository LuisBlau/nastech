@extends('layouts.app')

@section('content')
    <!-- Page title -->
    <section id="page-title" data-bg-parallax="/media/CompanyOfficePicture.png">
        <div class="container">
            <div class="page-title">
                <h1>Contact Us</h1>
                <span>The most happiest time of the day!.</span>
            </div>
{{--            <div class="breadcrumb">--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Home</a> </li>--}}
{{--                    <li><a href="#">Pages</a> </li>--}}
{{--                    <li class="active"><a href="#">Contact Us</a> </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- end: Page title -->
    <!-- CONTENT
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                    <div class="m-t-30">
                        <form class="widget-contact-form" data-success-message-delay="40000" novalidate action="#" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Address & Map</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo Office</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                         Google Map
                    <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div>
                         end: Google Map
                </div>
            </div>
        </div>
    </section>
        end: Content -->
    <!-- Contact -->
    <section class="p-t-100 p-b-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="m-b-10">Get in Touch with Us</h2>
                            <p class="lead">Our Headquarters are in the USA, though are teams are international </p>
                        </div>
                        <div class="col-lg-6 m-b-30">
                            <address>
                                <strong>Headquarters:</strong><br>
                                4795 Mile High Drive<br>
                                Salt Lake City, UT 84127<br>
                            </address>
                            <strong>Phone:</strong> (+1) 385-3477
                            <br>
                            <strong>Email:</strong> info@nascencetechnologies.com
                        </div>
                        <div class="col-lg-6 m-b-30">

                        </div>
                        <div class="col-lg-12 m-b-30">
                            <h4>We are social</h4>
                            <div class="social-icons social-icons-light social-icons-colored-hover">
                                <ul>
                                    <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="social-linkedin"><a href="https://www.linkedin.com/company/nascence-technologies/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-1">
                    <form class="widget-contact-form" novalidate action="{{ route('contact.send') }}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" required name="name" class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" required name="email" class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" required name="message" rows="8" class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>
                        {!! htmlFormSnippet() !!}
                        <div class="form-group mt-3">
                            <button class="btn btn-light" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send</button>
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
