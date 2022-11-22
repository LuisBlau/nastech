@extends('layouts.app')
@push('styles')
    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <!-- LOADING FONTS AND ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/fonts/font-awesome/css/font-awesome.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <style type="text/css">
        .blurslider-gradient {
            background: -webkit-linear-gradient(left, #9357cc 0%, #2989d8 50%, #2cc99d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .blurslider-button {
            background: -webkit-linear-gradient(left, #9357cc 0%, #2989d8 50%, #2cc99d 100%)
        }
    </style>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/plugins/slider-revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- PARTICLES ADD-ON FILES -->
    <link rel='stylesheet' href='/plugins/slider-revolution/revolution-addons/particles/css/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
    <script type='text/javascript' src='/plugins/slider-revolution/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.video.min.js"></script>
@endpush
@section('content')
    <!-- Revolution Slider -->
    <section id="slider">
        <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="particle-effect-three6" data-source="gallery" style="background:#ffffff;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_8_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-16" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="default" data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"
                        data-rotate="0" data-saveperformance="off" data-title="Example One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/transparent.png') }}" data-bgcolor='#ffffff' style='background:#ffffff' alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " id="slide-16-layer-15" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full-proportional" data-height="full-proportional"
                             data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="overlay" style="z-index: 5;"><img src="{{ url('/media/blurbg7.jpg') }}" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                                                                                                                                                                                                                                                width="1920" height="1080" data-no-retina> </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme  blurslider-gradient" id="slide-16-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-130','-130']"
                             data-fontsize="['60','60','40','40']" data-lineheight="['80','80','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:2;sY:3;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: rgba(4,37,60,1);font-family:Poppins;letter-spacing:10px;">GEOMETRIC<br />DESIGN </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme" id="slide-16-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['30','30','0','0']" data-width="['460','461','360','330']"
                             data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer" data-frames='[{"delay":700,"speed":1000,"frame":"0","from":"y:20px;sX:2;sY:3;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 460px; max-width: 460px; white-space: normal; font-size: 15px; line-height: 25px; font-weight: 400; color: rgba(4,37,60,1);font-family:Poppins;letter-spacing:10px;">BUILD WITH THE FREE PARTICLE EFFECTS ADDON FOR SLIDER REVOLUTION </div>
                        <!-- LAYER NR. 4 -->
                        <a class="tp-caption rev-btn  tp-resizeme  blurslider-button" href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923#addoninstall" target="_blank" id="slide-16-layer-17" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['140','140','110','110']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:100px;sX:2;sY:3;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]" data-blendmode="multiply" style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1);font-family:Poppins;background-color:rgba(4,37,60,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:3px;cursor:pointer;text-decoration: none;">GET ADDONS </a>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
            var revapi8;
            $(document).ready(function() {
                if ($("#rev_slider_8_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_8_1");
                } else {
                    revapi8 = $("#rev_slider_8_1").show().revolution({
                        sliderType: "hero",
                        jsFileLocation: "/plugins/slider-revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        particles: {
                            startSlide: "first",
                            endSlide: "last",
                            zIndex: "1",
                            particles: {
                                number: {
                                    value: 300
                                },
                                color: {
                                    value: "#000000"
                                },
                                shape: {
                                    type: "circle",
                                    stroke: {
                                        width: 0,
                                        color: "#ffffff",
                                        opacity: 1
                                    },
                                    image: {
                                        src: ""
                                    }
                                },
                                opacity: {
                                    value: 0.1,
                                    random: false,
                                    min: 0.25,
                                    anim: {
                                        enable: false,
                                        speed: 1,
                                        opacity_min: 0,
                                        sync: false
                                    }
                                },
                                size: {
                                    value: 1,
                                    random: true,
                                    min: 0.5,
                                    anim: {
                                        enable: false,
                                        speed: 40,
                                        size_min: 1,
                                        sync: false
                                    }
                                },
                                line_linked: {
                                    enable: true,
                                    distance: 80,
                                    color: "#000000",
                                    opacity: 0.35,
                                    width: 1
                                },
                                move: {
                                    enable: true,
                                    speed: 1,
                                    direction: "right",
                                    random: true,
                                    min_speed: 3,
                                    straight: false,
                                    out_mode: "out"
                                }
                            },
                            interactivity: {
                                events: {
                                    onhover: {
                                        enable: true,
                                        mode: "repulse"
                                    },
                                    onclick: {
                                        enable: true,
                                        mode: "bubble"
                                    }
                                },
                                modes: {
                                    grab: {
                                        distance: 400,
                                        line_linked: {
                                            opacity: 0.5
                                        }
                                    },
                                    bubble: {
                                        distance: 400,
                                        size: 100,
                                        opacity: 1
                                    },
                                    repulse: {
                                        distance: 75
                                    }
                                }
                            }
                        },
                        navigation: {},
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [868, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 400,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 0, 55],
                        },
                        shadow: 0,
                        spinner: "spinner0",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            disableFocusListener: false,
                        }
                    });
                }
                RsParticlesAddOn(revapi8);
            });
        </script>
    </section>
    <!-- end: Revolution Slider-->

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
