<header id="rs-header" class="rs-header">
    <!-- Topbar Area Start -->
    <div class="topbar-area">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-7">
                    <ul class="topbar-contact">
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:support@rstheme.com">info@pooha.org</a>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <a href="tel:+9378888978">(+93) 788202020</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="topbar-right">
                        <li class="login-register">
                            <i class="fa fa-sign-in"></i>
                            <a href="login.html">Login</a>/<a href="register.html">Register</a>
                        </li>
                        <li class="btn-part" >
                            <a style="background-color: #FFCC05" class="apply-btn" href="#"> Donate Us <i class="fa fa-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-2">
                    <div class="logo-cat-wrap">
                        <div class="logo-part pr-90">
                            <a class="dark-logo" href="/">
                                <img src="{{asset('logo.png')}}" alt="">
                            </a>
                            <a class="light-logo" href="/">
                                <img src="{{asset('white-logo.png')}}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-10 text-left">
                    <div class="rs-menu-area">
                        <div class="main-menu pr-90">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <li class=" "> <a href="/">Home</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">About Us <i class="fa fa-caret-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">Overview</a> </li>
                                            <li><a href="about2.html">Who We Are</a> </li>
                                            <li><a href="about2.html">What We Do</a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Events & Workshops <i class="fa fa-caret-down"></i></a>
                                        <ul class="sub-menu">
                                            @foreach($types as $type)
                                                <li><a href="course.html">{{$type->type}}</a> </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Women Empowerment <i class="fa fa-caret-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">Support afghan women Start ups and businesses</a> </li>
                                            <li><a href="course.html">Women Power Events</a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Opportunities <i class="fa fa-caret-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html"><i class="fa fa-caret-right"></i> Competitions </a>
                                                <ul class="sub-menu right">
                                                    @foreach($comcats as $cat)
                                                        <li><a href="blog-left.html">{{$cat->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="course.html"><i class="fa fa-caret-right"></i> Career</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="blog-left.html">Vacancies</a></li>
                                                    <li><a href="blog-right.html">Internship</a></li>
                                                    <li><a href="blog-right.html">Become a Volunteer</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="course.html">RFPs/RFQs</a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Contact Us</a></li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                        <div class="expand-btn-inner">
                            <ul>
                                <li>
                                    <a class="hidden-xs rs-search short-border" data-target=".search-modal" data-toggle="modal" href="#">
                                        <i class="flaticon-search"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

</header>
