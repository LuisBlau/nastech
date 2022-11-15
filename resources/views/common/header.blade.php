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
                            <li><a href="/">Home</a></li>
                            <li class="dropdown"><a href="#">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('cloud')}}">Cloud Computing</a></li>
                                    <li><a href="{{route('cyber')}}">Cybersecurity</a></li>
                                    <li><a href="{{route('project')}}">Project Management</a></li>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">App Development</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Government</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
