<!DOCTYPE html>
<html lang="zxx">
<head>
   @include('frontend.layout.head')
</head>
<body class="home-style2">

<!--Preloader area End here-->

<!--Full width header Start-->
<div class="full-width-header header-style2">
    <!--Header Start-->
    @include('frontend.layout.header')
    <!--Header End-->
</div>
<!--Full width header End-->

<!-- Main content Start -->
<div class="main-content">

    <!-- Slider Section Start -->
    <div class="rs-slider style1">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
            <div class="slider-content slide1">
                <div class="container">
                    <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Our goal is to develop society, and empower children, youths and women.</div>
                    <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">POOHA</h1>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        <a class="readon2 banner-style" href="{{url('about')}}">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="slider-content slide2">
                <div class="container">
                    <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">World Leading University</div>
                    <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">POOHA Organization</h1>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        <a class="readon2 banner-style" href="{{url('about')}}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Services Section Start -->
    <div class="rs-services style1 mb-100">
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly1">
                    <img src="assets/images/services/1.jpg" alt="">
                    <div class="content-part">
                        <img src="assets/images/services/icons/1.png" alt="">
                        <h4 class="title"><a href="#">Women Support</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly2">
                    <img src="assets/images/services/1.jpg" alt="">
                    <div class="content-part">
                        <img src="assets/images/services/icons/2.png" alt="">
                        <h4 class="title"><a href="#">Events & Workshops</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly3">
                    <img src="assets/images/services/1.jpg" alt="">
                    <div class="content-part">
                        <img src="assets/images/services/icons/3.png" alt="">
                        <h4 class="title"><a href="#">Youths Programs</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly4">
                    <img src="assets/images/services/1.jpg" alt="">
                    <div class="content-part">
                        <img src="assets/images/services/icons/1.png" alt="">
                        <h4 class="title"><a href="#">Internships & Vacancies</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
        <div class="container"  id="noticeboard">
            <div class="row">
                <div class="col-lg-4 order-last">
                    <div class="notice-bord style1">
                        <h4 class="title">Competitions</h4>
                        <ul>
                        @foreach($competition as $compet)
                            <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="date">{{$compet->date}}</div>
                                <div class="desc">{{$compet->title}}</div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 pr-50 md-pr-15">
                    <div class="about-part">
                        <div class="sec-title mb-40">
                            <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">About Us</div>
                            <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">World Best Virtual Learning Network Educavo eLearning</h2>
                            <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 500ms; animation-name: fadeInUp;"> Pervasive organization for human awareness (POOHA) is non‐profitable, non‐political
and non‐government organization established in 2020 which is registered in the ministry of
economy with registration number (4905), by a team that has been working to make a better
society for life. This team decided to start their help in form of an organization and help children,
youths and women by providing them enough opportunities for education, awareness,
development of their economic and social life in order to have an educated and bright
Afghanistan.</div>
                        </div>
                        <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="img-part">
                                <img src="assets/images/about/ceo.png" alt="CEO Image">
                            </div>
                            <div class="author-part">
                                <span class="sign mb-10"><img src="assets/images/about/sign.png" alt="Sign"></span>
                                <span class="post">CEO &amp; Founder of Educavo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Degree Section Start -->
    <div class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40">
        <div class="container" id="eventSection">
            <div class="row y-middle">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="sub-title primary">Our Events</div>
                        <h2 class="title mb-0">Events Organized by POOHA</h2>
                    </div>
                </div>
                @foreach($events as $event)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="degree-wrap">
                        <img src="{{asset('img/events')}}/{{$event->image}}" style="height: 350px;" alt="{{$event->title}}">
                        <div class="title-part">
                            <h4 class="title">{{$event->title}}.</h4>
                            <h4 class="title">Address: {{$event->vanue}}</h4>
                        </div>
                        <div class="content-part">
                            <h4 class="title"><a href="#">{{$event->title}}</a></h4>
                            <p class="desc">{{$event->sub_title}} </p>
                            <div class="btn-part">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Degree Section End -->

    <!-- Latest Events Section End -->

    <!-- Partner Start -->
    <div class="rs-partner pt-100 pb-100 md-pt-70 md-pb-70 gray-bg">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="assets/images/partner/1.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="assets/images/partner/2.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="assets/images/partner/3.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="assets/images/partner/4.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="assets/images/partner/5.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="assets/images/partner/6.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->
    <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container" id="newsSection">
                <div class="sec-title mb-60 text-center">
                    <div class="sub-title primary">News Update </div>
                    <h2 class="title mb-0">Latest News & Events</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="false" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @foreach($blogs as $blog)    
                <div class="blog-item">
                        <div class="image-part">
                            <img src="{{asset('img/blog')}}/{{$blog->image}}" alt="" style="height:300px; widht: 400px;">
                        </div>
                        <div class="blog-content new-style">
                            <ul class="blog-meta">
                                <li><i class="fa fa-calendar"></i>{{$blog->date}}</li>
                            </ul>
                            <h3 class="title"><a href="blog-single.html">{{$blog->title}}</a></h3>
                            <div class="desc">{{$blog->sub_title}}</div>
                            <ul class="blog-bottom">
                                <li class="btn-part"><a class="readon-arrow" href="#">Read More</a></li>
                            </ul>
                        </div>
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    <!-- Testimonial Section Start -->
    
    <!-- Testimonial Section End -->

    <!-- Section Gray bg Wrap start -->
    
    <div class="gray-bg">
        <!-- Blog Section Start -->
<div class="container" id="vulanteer">
<div class=" text-center pt-100">
            <span>Vulanteer</span>
            <h3>Join us a Vulanteer</h3>
        </div>
    <div class="row">
          
        <div class="image col-md-6 pt-100 pb-100 md-pt-70">
            <img src="{{asset('assets/images/services/1.jpg')}}" arl="image">
        </div>
        <div class="rs-login col-md-6 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login">Vulanteer</h2>
                                <h4>If you are willing to become a Vulanteer, fill the form bellow.</h4>
                                <form id="contact-form" method="POST" action="{{route('indexForm')}}">
                                    <input type="text" name="name" placeholder="Name" required="">
                                    <input type="text" name="email" placeholder="Email" required="">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                    <textarea class="form-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                    <button type="submit" class="readon submit-btn mt-4">Submit</button>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Newsletter section start -->
        @include('frontend.layout.newsletter')
        <!-- Newsletter section end -->
    </div>
    <!-- Section bg Wrap 2 End -->
</div>
<!-- Main content End -->

<!-- Footer Start -->
@include('frontend.layout.footer')
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

@include('frontend.layout.scripts')
</body>
</html>
