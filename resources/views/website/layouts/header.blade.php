<nav>
    <div class="top_nav">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <ul class="fs-t">
                    <li>
                        <a class="d-none d-md-block scroll-link">Skip to Main Content</a>
                    </li>
                    <span class="text-white d-none d-md-block">|</span>
                    <li>
                        <!-- <i class="fa fa-envelope"></i> -->
                        <a href="{{ url('screen/reader') }}" class="">Screen Reader Access</a>
                    </li>
                    <span class="text-white d-none d-md-block">|</span>
                    <li class="d-none d-md-block">
                        <button class="btn text-white px-0 border-0 decrease">A-</button>
                    </li>
                    <span class="text-white d-none d-md-block">|</span>
                    <li class="d-none d-md-block">
                        <button class="btn text-white px-0 border-0 reset">A</button>
                    </li>
                    <span class="text-white d-none d-md-block">|</span>
                    <li class="d-none d-md-block">
                        <button class="btn text-white px-0 border-0 increase">A+</button>
                    </li>
                </ul>

                <ul class="fs-t">
                    <li>
                        <a href="https://facebook.com/"><i class="fa fa-facebook me-2"></i></a>
                    </li>

                    <li>
                        <a href="https://twitter.com/"><i class="fa fa-twitter me-2"></i></a>
                    </li>

                    <li>
                        <a href="https://instagram.com/"><i class="fa fa-instagram me-2"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/"><i class="fa fa-linkedin me-2"></i></a>
                    </li>
                    <li>
                        <div class="header-search-wrapper">
                            <span class="search-main d-block">
                                <i class="fa fa-search"></i>
                            </span>
                            <div class="search-form-main clearfix">
                                <form method="Get" class="search-form" action="{{ url('search') }}">
                                    <div class="form-group">
                                        <input type="text" class="search-field form-control" placeholder="Search …"
                                            value="" name="search">
                                        <button class="btn btn-success btn-search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nav_wrapper">
        <div class="navbar">
            <div class="container">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="logo nav-logo">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid" src="{{ asset('/website/images/thank_you_image.jpg') }}"
                                alt="" />
                        </a>
                    </div>

                    <div class="menus">
                        <ul class="menu fs-t">
                            @if ($cus->id ?? '')
                                <li><a href="{{ url('user-logout') }}">Logout</a></li>
                            @else
                                <li><a href="{{ url('user-login') }}">Login</a></li>
                            @endif
                        </ul>

                        <ul class="options">

                            <li class="d-block d-lg-none">
                                <div class="hamburger" id="hamburger-1">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav_overlay"></div>

    <div class="mobile_nav">
        <div id="mobile_nav_wrapper" class="wrapper">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img class="img-fluid" src="{{ asset('/website/images/icon/logo-bg-mobile.png') }}"
                        alt="" />
                </a>
            </div>

            <div class="accordion_wrapper">
                <a href='{{ url('/') }}'>
                    <h3 class="heading3">Home</h3>
                </a>
                <div class="accordion">
                    <div class="heading">
                        <h3 class="heading3">About Us</h3>
                    </div>
                    <div class="contents">

                        <a href="{{ url('about/website') }}">
                            <h3 class="heading3">About Webiste</h3>
                        </a>
                        <a href="{{ url('about') }}">
                            <h3 class="heading3">About NIPER</h3>
                        </a>
                        <!--<a href="###">-->
                        <!--    <h3 class="heading3">About Page</h3>-->
                        <!--</a>-->

                    </div>
                    <a href="{{ url('people-involed') }}">
                        <h3 class="heading3">People Involved</h3>
                    </a>
                    <a href="{{ url('/naturalProd') }}">
                        <h3 class="heading3">About Natural Product Dept.</h3>
                    </a>
                    <a href="{{ url('team-section') }}">
                        <h3 class="heading3">Leadership</h3>
                    </a>

                    <a href="{{ url('event-gallery') }}">
                        <h3 class="heading3">Events</h3>
                    </a>
                    <div class="heading">
                        <h3 class="heading3">Media</h3>
                    </div>
                    <div class="contents">
                        <a href="{{ url('/gallery-album') }}">
                            <h3 class="heading3">Images</h3>
                        </a>
                        <!--<a href="###">-->
                        <!--    <h3 class="heading3">About Page</h3>-->
                        <!--</a>-->
                        <a href="{{ url('media/gallery/video') }}">
                            <h3 class="heading3">Video</h3>
                        </a>


                    </div>
                    <a href="{{ url('our/plants') }}">
                        <h3 class="heading3">Our Plants</h3>
                    </a>

                    <!--<a href="###" data-bs-toggle="modal" data-bs-target="#visitor-reg">-->
                    <!--    <h3 class="heading3">Plant Registration</h3>-->
                    <!--</a>-->

                </div>
            </div>

            <div class="close-button">
                <i class="fa fa-times fs-4"></i>
            </div>
        </div>
    </div>
</nav>

<!-- Modal Structure -->
