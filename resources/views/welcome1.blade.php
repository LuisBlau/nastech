<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Nascenec Technologies LLC" />
    <meta name="description" content="Cutting edge of technology solutions">
    <link rel="icon" type="image/png" href="media/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Nascence Technologies</title>
    <!-- Stylesheets & Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">

</head>

<body>


    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Header -->
        <header id="header" data-transparent="true" class="dark">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="index.html"><span class="logo-default"><img src="media/logo.png" height="35px" width="35px">&nbsp;NASCENCE</span><span class="logo-dark"><img src="media/logo.png" height="35px" width="35px">&nbsp;NASCENCE</span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Layout</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-topbar.html">Light</a></li>
                                                    <li><a href="header-topbar-dark.html">Dark</a></li>
                                                    <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                    <li><a href="header-topbar-colored.html">Colored</a></li>
                                                    <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-alternative.html">Alternative</a></li>
                                                    <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                    <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed Logo</a></li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive Logo</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a></li>
                                                    <li><a href="page-title-video.html">Video background</a></li>
                                                    <li><a href="page-title-particle.html">Particle animation</a></li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a></li>
                                                    <li><a href="page-title-background-color.html">Colored background</a></li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                                                    <li><a href="page-menu-sticky.html">Sticky</a></li>
                                                    <li><a href="page-menu-rounded.html">Rounded</a></li>
                                                    <li><a href="page-menu-outline.html">Outline</a></li>
                                                    <li><a href="page-menu-lines.html">Lines</a></li>
                                                    <li><a href="page-menu-solid.html">Solid</a></li>
                                                    <li><a href="page-menu-light.html">Light</a></li>
                                                    <li><a href="page-menu-dark.html">Dark</a></li>
                                                    <li><a href="page-menu-creative.html">Creative</a></li>
                                                    <li><a href="page-menu.html">Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a></li>
                                                    <li><a href="sidebar.html">Left aligned</a></li>
                                                    <li><a href="sidebar-right.html">Right aligned</a></li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="sidebar-modern.html">Modern</a></li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a></li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a></li>
                                                    <li><a href="footer-dark.html#footer">Dark</a></li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a></li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a></li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a></li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a></li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a></li>
                                                    <li><a href="footer-6.html#footer">Footer 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Options</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="layout-boxed.html">Boxed</a></li>
                                                    <li><a href="layout-modern.html">Modern</a></li>
                                                    <li><a href="layout-frame.html">Frame</a></li>
                                                    <li><a href="layout-wide.html">Wide (default)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-inspiro-slider.html">Inspiro Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span class="badge bg-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open-subscription.html">Subscription</a></li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span class="badge bg-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a></li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shape-dividers.html">Shape Dividers<span class="badge bg-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="#">Label (hot)<span class="badge bg-danger">HOT</span></a></li>
                                                    <li><a href="#">Label (popular)<span class="badge bg-success">POPULAR</span></a></li>
                                                    <li><a href="#">Label (sale)<span class="badge bg-warning">SALE</span></a></li>
                                                    <li><a href="#">Label (info)<span class="badge bg-info">INFO</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-according.html">Accordions</a></li>
                                                            <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                            <li><a href="shortcode-animations.html">Animations</a></li>
                                                            <li><a href="shortcode-avatar.html">Avatar</a></li>
                                                            <li><a href="shortcode-audio-video.html">Audio & Video</a></li>
                                                            <li><a href="shortcode-blockquotes.html">Blockquotes</a></li>
                                                            <li><a href="component-bootstrap-switch.html">BS Switch<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-bootstrap-notify.html">BS Notify<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-breadcrumbs.html">Breadcrumbs</a></li>
                                                            <li><a href="shortcode-buttons.html">Buttons</a></li>
                                                            <li><a href="shortcode-background-image.html">Background Image</a></li>
                                                            <li><a href="shortcode-background-overlays.html">Background Overlays</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="component-charts-chartjs.html">Charts<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-calendar.html">Calendar<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-client-logo.html">Clients logos</a></li>
                                                            <li><a href="shortcode-calltoaction.html">Call to action</a></li>
                                                            <li><a href="shortcode-carousel.html">Carousel</a></li>
                                                            <li><a href="shortcode-code.html">Code</a></li>
                                                            <li><a href="shortcode-countdown-timer.html">Countdown Timers</a></li>
                                                            <li><a href="shortcode-countdown.html">Countdown<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-counters.html">Counter Numbers</a></li>
                                                            <li><a href="component-clipboard.html">Clipboard<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-datatable.html">Data Tables<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-daterangepicker.html">Date & Time Pickers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-dropcat-highlight.html">Dropcat & Highlight</a></li>
                                                            <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                                            <li><a href="shortcode-team-members.html">Team members</a></li>
                                                            <li><a href="shortcode-forms.html">Form Controls</a></li>
                                                            <li><a href="shortcode-form-validation.html">Form Validation</a></li>
                                                            <li><a href="shortcode-form-layouts.html">Form Layouts</a></li>
                                                            <li><a href="shortcode-file-upload.html">File upload</a></li>
                                                            <li><a href="shortcode-grid.html">Grid System</a></li>
                                                            <li><a href="shortcode-heading-styles.html">Heading Styles</a></li>
                                                            <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                                            <li><a href="shortcode-icon-lists.html">Icons</a></li>
                                                            <li><a href="shortcode-images.html">Images</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-lightbox.html">Lightbox</a></li>
                                                            <li><a href="shortcode-lists.html">Lists</a></li>
                                                            <li><a href="shortcode-labels-badgets.html">Labels & Badges</a></li>
                                                            <li><a href="shortcode-maps.html">Maps</a></li>
                                                            <li><a href="shortcode-modal.html">Modal</a></li>
                                                            <li><a href="shortcode-modal-strip.html">Modal Strip</a></li>
                                                            <li><a href="shortcode-navs.html">Navbar & Navs</a></li>
                                                            <li><a href="shortcode-paginations.html">Pagination & Pager</a></li>
                                                            <li><a href="shortcode-panels.html">Panels</a></li>
                                                            <li><a href="shortcode-pie-chart.html">Pie charts</a></li>
                                                            <li><a href="shortcode-popover.html">Popover</a></li>
                                                            <li><a href="shortcode-milestone-stats.html">Milestone & Stats</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-pricing-table.html">Pricing tables</a></li>
                                                            <li><a href="shortcode-progress-bar.html">Progress bars</a></li>
                                                            <li><a href="shortcode-parallax.html">Parallax</a></li>
                                                            <li><a href="shortcode-particles.html">Particles<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-responsive-utilities.html">Responsive utilities</a></li>
                                                            <li><a href="component-ion-range-slider.html">Range Slider<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-sections.html">Sections</a></li>
                                                            <li><a href="shortcode-smooth-scrolling.html">Smooth Scrolling</a></li>
                                                            <li><a href="shortcode-social-icons.html">Social Icons</a></li>
                                                            <li><a href="shortcode-spinners.html">Spinners<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="component-toggles-radio-checkboxes.html">Switch Toggle<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-shape-dividers.html">Shape Dividers<span class="badge bg-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-ratings.html">Ratings<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-tables.html">Tables</a></li>
                                                            <li><a href="shortcode-textbox.html">Text Boxes</a></li>
                                                            <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                            <li><a href="shortcode-testimonial.html">Testimonials</a></li>
                                                            <li><a href="shortcode-toggles.html">Toggles</a></li>
                                                            <li><a href="shortcode-tooltips.html">Tooltips</a></li>
                                                            <li><a href="shortcode-typography.html">Typography</a></li>
                                                            <li><a href="shortcode-text-rotator.html">Text Rotator</a></li>
                                                            <li><a href="shortcode-timeline.html">Timeline<span class="badge bg-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-video-background.html">Video Background</a></li>
                                                            <li><a href="shortcode-wizard.html">Wizard<span class="badge bg-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a></li>
                                                    <li><a href="page-about-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="page-about-me-basic.html">Basic</a></li>
                                                    <li><a href="page-about-me-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a></li>
                                                    <li><a href="page-contact-advanced.html">Advanced</a> </li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a></li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a></li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a></li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a></li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-gallery-2.html">Two Columns</a></li>
                                                    <li><a href="page-gallery-3.html">Three Columns</a></li>
                                                    <li><a href="page-gallery-4.html">Four Columns</a></li>
                                                    <li><a href="page-gallery-5.html">Five Columns</a></li>
                                                    <li><a href="page-gallery-6.html">Six Columns</a></li>
                                                    <li><a href="page-gallery-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="page-gallery-wide.html">Wide version</a></li>
                                                    <li><a href="page-gallery-load-more.html">Load more</a></li>
                                                    <li><a href="page-gallery-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <!--<li><a href="page-gallery-gallery-albums.html">Gallery Albums</a></li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a></li>
                                                    <li><a href="page-user-login-cover.html">Login - Side Cover</a></li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a></li>
                                                    <li><a href="page-user-register-cover.html">Register - Side Cover</a></li>
                                                    <li><a href="page-user-register.html">Register</a></li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a></li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-services.html">Services</a></li>
                                            <li><a href="page-our-team.html">Our team</a></li>
                                            <li><a href="page-our-clients.html">Our clients</a></li>
                                            <li><a href="page-maintenance.html">Maintenance</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                            <li><a href="page-404-parallax.html">404 Page - Parallax</a></li>
                                            <li><a href="page-500.html">500 Page</a></li>
                                            <li><a href="page-fullwidth.html">Fullwidth page</a></li>
                                            <li><a href="page-fullwidth-wide.html">Fullwidth page - Wide</a></li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="page-sidebar-right.html">Sidebar Right</a></li>
                                                    <li><a href="page-sidebar-both.html">Sidebar Both</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-site-map.html">Site Map</a></li>
                                            <li><a href="page-faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li><a href="portfolio-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-3.html">Three Columns</a></li>
                                                            <li><a href="portfolio-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-sidebar.html">Sidebar version</a></li>
                                                            <li><a href="portfolio-wide-3.html">Wide version</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                            <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-masonry-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-masonry-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-masonry-sidebar.html">Sidebar version</a></li>
                                                            <li><a href="portfolio-masonry-wide-3.html">Wide version</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                            <li><a href="portfolio-load-more.html">Load more</a></li>
                                                            <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                            <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                            <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                            <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                            <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="portfolio-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="portfolio-slider-3.html">Slider Default</a></li>
                                                            <li><a href="portfolio-no-page-title.html">No Page Title</a></li>
                                                            <li><a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a></li>
                                                            <li><a href="portfolio-hover-styles.html">Hover Styles</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li><a href="portfolio-page-grid-gallery.html">Grid Gallery</a></li>
                                                            <li><a href="portfolio-page-particles.html">Particles Wide Project</a></li>
                                                            <li><a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a></li>
                                                            <li><a href="portfolio-page-slider.html">Slider version</a></li>
                                                            <li><a href="portfolio-page-background-image.html">Fullscreen image</a></li>
                                                            <li><a href="portfolio-page-background-video.html">Fullscreen Video</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-9 m-t-10">
                                                                        <div class="text-center center">
                                                                            <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3"><a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="d-block d-lg-none">
                                                            <li><a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="blog-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="blog-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                            <li><a href="blog-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="blog-masonry-sidebar.html">Sidebar version</a></li>
                                                            <li><a href="blog-masonry-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-masonry-wide.html">Wide version</a></li>
                                                            <li><a href="blog-masonry-load-more.html">Load More</a></li>
                                                            <li><a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a href="blog-masonry-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li><a href="blog-1.html">One Column</a></li>
                                                            <li><a href="blog-2.html">Two Columns</a></li>
                                                            <li><a href="blog-3.html">Three Columns</a></li>
                                                            <li><a href="blog-4.html">Four Columns</a></li>
                                                            <li><a href="blog-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-wide.html">Wide version</a></li>
                                                            <li><a href="blog-load-more.html">Load More</a></li>
                                                            <li><a href="blog-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a href="blog-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li><a href="blog-left-image-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="blog-left-image-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="blog-left-image-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="blog-left-image-no-sidebar.html">No Sidebar</a></li>
                                                            <li><a href="blog-left-image-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-left-image-load-more.html">Load More</a></li>
                                                            <li><a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a href="blog-left-image-author-info.html">Author Info</a></li>
                                                            <li><a href="blog-left-image-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="blog-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="blog-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li><a href="blog-single.html">Default</a></li>
                                                            <li><a href="blog-single-slider.html">Slider</a></li>
                                                            <li><a href="blog-single-video.html">Video</a></li>
                                                            <li><a href="blog-single-audio.html">Audio</a></li>
                                                            <li><a href="blog-single-creative.html">Creative</a></li>
                                                            <li class="mega-menu-title">Comments<span class="badge bg-danger">NEW</span></li>
                                                            <li><a href="blog-comments.html#comments">Default Comments</a></li>
                                                            <li><a href="blog-comments-disqus.html#comments">Disqus Comments</a></li>
                                                            <li><a href="blog-comments-facebook.html#comments">Facebook Comments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li><a href="shop-columns-2.html">Two Columns</a></li>
                                                            <li><a href="shop-columns-3.html">Three Columns</a></li>
                                                            <li><a href="shop-columns-4.html">Four Columns</a></li>
                                                            <li><a href="shop-columns-5.html">Five Columns</a></li>
                                                            <li><a href="shop-columns-6.html">Six Columns</a></li>
                                                            <li><a href="shop-sidebar-sticky.html">Sidebar Sticky</a></li>
                                                            <li><a href="shop-wide.html">Wide version</a></li>
                                                            <li><a href="shop-no-page-title.html">No page title</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="shop-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="shop-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="shop-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="shop-fullwidth.html">Fullwidth (Wide)</a></li>
                                                            <li class="mega-menu-title">Loading Styles</li>
                                                            <li><a href="shop-load-more.html">Load more</a><a href="shop-load-more-sidebar.html">Load Sidebar</a></li>
                                                            <li><a href="shop-infinite-scroll.html">Infinity Scroll</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li><a class="animsition-link" href="shop-cart.html">Shoping Cart</a></li>
                                                            <li><a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a></li>
                                                            <li><a class="animsition-link" href="shop-checkout.html">Checkout</a></li>
                                                            <li><a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a></li>
                                                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                            <li><a href="shop-wishlist-empty.html">Wishlist Empty</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li><a href="shop-single-product.html">Fullwidth</a></li>
                                                            <li><a href="shop-single-product-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-both.html">Both Sidebars</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5 p-l-0">
                                                        <h4 class="text-theme">BIG SALE<small>Up to</small></h4>
                                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                                        <p class="m-b-0">The most happiest time of the day!. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p><a class="btn btn-shadow btn-roundeded btn-block m-t-10">SHOP NOW!</a><small class="t300">
                                                            <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

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
                        <div><a href="#" class="btn btn-danger">Explore Services</a></div>
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
                        <div><a href="#" class="btn btn-danger">Explore more</a></div>
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
                        <div><a href="#" class="btn btn-danger">Explore more</a></div>
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
                            <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>LINES OF CODE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter text-lg"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>CUPS OF COFFEE</p>
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
                            <div class="counter text-lg"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Our numbers -->

        <!-- SERVICES -->
        <section>
            <div class="container">
                <div class="col-lg-12 col-md-12 m-b-40 text-center">
                    <h2>Services</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
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
                                <strong>Email:</strong> info@nascencetechnologies.com.com
                            </div>
                            <div class="col-lg-6 m-b-30">

                            </div>
                            <div class="col-lg-12 m-b-30">
                                <h4>We are social</h4>
                                <div class="social-icons social-icons-light social-icons-colored-hover">
                                    <ul>
                                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-1">
                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" required name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" required name="widget-contact-form-message" rows="8" class="form-control required" placeholder="Enter your Message"></textarea>
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


        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">

                                <div class="widget-title">Nascence Technologies</div>
                                <p class="mb-5">Your trusted advisor for technology.  All Rights Reserved. Copyright &copy; 2018</p>
                                <a href="/contact" class="btn btn-inverted" target="_blank">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2018 Nascence Technologies, LLC. - All Rights Reserved. </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/plugins.js') }}"></script>

    <!--Template functions-->
    <script src="{{ url('/js/functions.js') }}"></script>

    <!--Particles-->
    <script src="{{ url('/plugins/particles/particles.js') }}"></script>
    <script src="{{ url('/plugins/particles/particles-dots.js') }}"></script>

</body>

</html>
