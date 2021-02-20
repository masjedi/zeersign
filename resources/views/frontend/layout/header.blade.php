<header class="xs-header header-transparent xs-box">
<div class="container">
<nav class="xs-menus">
<div class="xs-top-bar clearfix" style="background-color:#057cae;">
<ul class="xs-top-social">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-behance"></i></a></li>
<li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
<li><a href="{{ LaravelLocalization::getLocalizedURL('fa') }}">دری</a></li>
<li><a href="{{ LaravelLocalization::getLocalizedURL('ps') }}">پښتو</a></li>
</ul>
<a href="/cdn-cgi/l/email-protection#402e212d2500242f2d21292e6e232f2d" class="xs-top-bar-mail"><i class="fa fa-envelope-o"></i><span class="__cf_email__" data-cfemail="5c35323a2c1c39243d312c3039723f3331">info@pooha.af</span></a>
</div>
<div class="nav-header">
<div class="nav-toggle"></div>
<a href="{{url('/')}}" class="xs-nav-logo">
<img src="{{asset('assets/images/logo.png')}}" alt="">
</a>
</div>
<div class="nav-menus-wrapper row">
<div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
<a class="nav-brand" href="{{url('/')}}">
<img src="{{asset('assets/images/logo.png')}}" alt="">
</a>
</div>
<div class="col-lg-10 col-xl-7">
<ul class="nav-menu">
<li><a href="{{url('/')}}">Home</a>
</li>
<li><a href="{{url('aboutus')}}">about</a></li>
<li><a href="causes.html">Careers</a></li>
<li><a href="#">Events</a>
<ul class="nav-dropdown">
<li><a href="event.html">Event</a></li>
<li><a href="event-single.html">Event single</a></li>
</ul>
</li>
<li><a href="#">Gallery</a>
<ul class="nav-dropdown">
<li><a href="blog.html">Blog</a></li>
<li><a href="blog-single.html">Blog single</a></li>
</ul>
</li>
<li><a href="#">Pages</a>
<ul class="nav-dropdown">
<li><a href="donate-now.html">donate now</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="mission.html">mission</a></li>
<li><a href="portfolio.html">portfolio</a></li>
<li><a href="pricing.html">pricing</a></li>
<li><a href="service.html">service</a></li>
<li><a href="team.html">team</a></li>
<li><a href="volunteer.html">volunteer</a></li>
</ul>
</li>
<li><a href="{{url('contactus')}}">Contact</a></li>
</ul>
</div>
<div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-3 d-block d-lg-none d-xl-block">
<a href="{{url('donation')}}" class="btn btn-primary" style="background-color:#ffca10;">
<span class="badge"><i class="fa fa-heart"></i></span> Donate Now
</a>
</div>
</div>
</nav>
</div>
</header>