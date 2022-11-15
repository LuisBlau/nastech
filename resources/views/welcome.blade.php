@extends('layouts.app')

@section('content')
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
    <!-- Slide 1 -->

    <div class="slide kenburns" data-bg-image="{{ url('/media/1.jpg') }}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center">
                <!-- Captions -->
                <h1 class="text-light">Cutting Edge Technology</h1>
                <h4 class="m-b-20 text-light">Your vision set enabled through inovation, knowledge, and creativity.</h4>
                <div><a href="#service-section" class="btn btn-danger">Explore Services</a></div>
                <!-- end: Captions -->
            </div>

        </div>
    </div>
    <!-- end: Slide 1 bu-->
    <!-- Slide 2 -->
    <div class="slide slide-dark kenburns" data-bg-image="{{ url('/media/2.jpg') }}">
        <div class="bg-overlay" data-style="1"></div>
        <div class="container">
            <div class="slide-captions text-dark text-center">
                <!-- Captions -->
                <h1>Soultions with Vision</h1>
                <h4 class="m-b-20">Set your goals high, and let us build the tech necessary for your success.</h4>
                <div><a href="#service-section" class="btn btn-danger">Explore more</a></div>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 2 -->
    <!-- Slide 3 -->
    <div class="slide slide-dark kenburns" data-bg-image="{{ url('/media/3.jpg') }}">
        <div class="bg-overlay" data-style="1"></div>
        <div class="container">
            <div class="slide-captions text-dark text-center">
                <!-- Captions -->
                <h1>Inspiring Cloud Solutions</h1>
                <h4 class="m-b-20">Cloud Infrastructure, both economic and effective.</h4>
                <div><a href="#service-section" class="btn btn-danger">Explore more</a></div>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 3 -->
</div>
<!--end: Inspiro Slider -->

<!-- About us -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 m-b-40">
                <h4>What We Can Do For You</h4>
                <h2>You have the vision,let us get you to the finish line</h2>
                <p class="lead">Nascence Technologies has expertise in all fields of technology, from custom development to cloud architecture.  Our consultants are able to help fill holes in your staff's experience and expertise, and also manage entire projects together.  Nascence Technologies can support small, one off efforts, to large corporate wide projects, all in exemplary time and at a reasonable cost.</p>
            </div>

            <div class="col-lg-6">
                <h4>Our Skills</h4>
                <div class="p-progress-bar-container radius small title-up color">
                    <div class="p-progress-bar" data-percent="100" data-delay="1000" data-type="%">
                        <div class="progress-title">Cloud Architecture</div>
                    </div>
                </div>
                <div class="p-progress-bar-container radius small title-up color">
                    <div class="p-progress-bar" data-percent="100" data-delay="1100" data-type="%">
                        <div class="progress-title">Systems Development</div>
                    </div>
                </div>
                <div class="p-progress-bar-container radius small title-up color">
                    <div class="p-progress-bar" data-percent="100" data-delay="1200" data-type="%">
                        <div class="progress-title">Project Management</div>
                    </div>
                </div>
                <div class="p-progress-bar-container radius small title-up color">
                    <div class="p-progress-bar" data-percent="100" data-delay="1300" data-type="%">
                        <div class="progress-title">Mobile App Development</div>
                    </div>
                </div>
                <div class="p-progress-bar-container radius small title-up color">
                    <div class="p-progress-bar" data-percent="100" data-delay="1400" data-type="%">
                        <div class="progress-title">Cyber Security</div>
                    </div>
                </div>
                <div class="p-progress-bar-container radius small title-up color">
                    <div class="p-progress-bar" data-percent="100" data-delay="1500" data-type="%">
                        <div class="progress-title">Networking</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="m-b-20">Best services around</h4>
                <div class="accordion fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-cloud"></i>Cloud Architectures</h5>
                        <div class="ac-content ac-active">
                            At Nascence, we are cloud agnostic.  We have experience in Azure, AWS, Google Cloud Compute, and Digitial Ocean.  So supply the requirement and we can recommend the best place to home your project.
                            <br />
                            <br /> Have existing cloud architecture?  Hybrid Cloud?  Private Cloud?  We can well design, monitor, secure, and implement all of 'em.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-dolly"></i>We Deliver</h5>
                        <div class="ac-content">
                            Our core belief at Nascence Technologies is "Every project, every time".  Our highly trained consultants can be folded into your existing team, or manage the project for you.
                            <br />
                            <br /> We have Project Managment Professional (PMP) certified staff avaialble to help you get back on track and deliver on time.  Our team has experice with small internal app releases to major DoD critical infrastrcuture implementations.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-cogs"></i>Software Development</h5>
                        <div class="ac-content">
                            Nascence Technologies has extensive experience in .NET, PHP, Python, JavaScript, Node.js, SQL, HTML, CSS, UI/UX, Swift, Flutter, Objective C, and countless other cutting edge technologies.
                            <br />
                            <br /> Need a mobile app, say no more! Intranet portals for your staff? We can help!  IoT development to keep your critical process, infrastructure and other internet connected assets herded?  We got this!</div>
                    </div>
                </div>
            </div>

            <!-- end features box -->
        </div>
    </div>
</section>
<!-- end: About us -->

<!-- Portfolio-->

<!-- end: Portfolio -->

<!-- Our numbers -->
<section class="background-grey p-t-100 p-b-50">
    <div class="container xs-text-center sm-text-center">
        <div class="row">
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50" data-to="1241688" data-from="600" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>LINES OF CODE</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="counter text-lg"> <span data-speed="4500" data-refresh-interval="23" data-to="36502" data-from="100" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>ETL Builds</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>FINISHED PROJECTS</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="counter text-lg"> <span data-speed="4550" data-refresh-interval="50" data-to="1085" data-from="48" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>Vulneribilities Mitigated</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Our numbers -->

<!-- SERVICES -->
<section id="service-section">
    <div class="container">
        <div class="col-lg-12 col-md-12 m-b-40 text-center">
            <h2>Services</h2>
            <p class="lead">Just a small sampling of what Nascence Technologies can offer</p>
        </div>
        <div class="row">
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-cloud"></i></a>
                    </div>
                    <h3>Cloud Computing</h3>
                    <p>Let us handle the setup, maintenance, and security of your cloud enviornment.</p>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-lock"></i></a>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>We have CISSP, ITIL, and GIAC ISO 27000x certified staff available to ensure your cybersecurity.</p>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-chart-line"></i></a>
                    </div>
                    <h3>Project Management</h3>
                    <p>Our PMP Certified associates will help ensure your project delivers on time and within budget.</p>
                </div>
            </div>

            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                    <h3>SEO</h3>
                    <p>Let our team help pull you up the search enginge rankings.</p>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-globe"></i></a>
                    </div>
                    <h3>Web Development</h3>
                    <p>Our experienced developers can provide simple to complex web solutions.</p>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fab fa-app-store"></i></a>
                    </div>
                    <h3>App Development</h3>
                    <p>Need a custom app for both iPhone and Android?  We can help.</p>
                </div>
            </div>

            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-paint-brush"></i></a>
                    </div>
                    <h3>Web & App Design</h3>
                    <p>We can help insure that your Web and Mobile apps meet your UI/UX goals and industry best practices.</p>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-school"></i></a>
                    </div>
                    <h3>Team Security Training</h3>
                    <p>We can help build out security training plans for your organization to meet your unique operating picture.</p>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
                <div class="icon-box effect medium border small">
                    <div class="icon">
                        <a href="#"><i class="fa fa-hands-helping"></i></a>
                    </div>
                    <h3>Disaster Recovery and Business Continuity</h3>
                    <p>Let our trained specailists aid in the critical planning of all DR and BCP actions for your organization.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end: SERVICES -->

<!-- Our numbers -->
<section class="background-colored p-t-120 p-b-40">
    <div id="particles-dots" class="particles"></div>
    <div class="container xs-text-center sm-text-center text-light">
        <div class="row">
            <div class="col-lg-9 p-b-40">
                <h2>Connect the Dots</h2>
                <p class="lead">Let our specalists help bridge the chasm between data and knowledge.  We specalise in business intelligence and all forms of Extract / Transform / Load (ETL) technologies.</p>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="12" data-to="213" data-from="50" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>FINISHED DATA PROJECTS</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end: Our numbers -->


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
