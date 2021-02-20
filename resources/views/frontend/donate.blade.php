
<!doctype html>
<html class="no-js" lang="en">
@include('frontend.layout.head')
<body>
@include('frontend.layout.header')


<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/about_bg.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Donate Now</h2>
<p>Give a helping hand for poor people</p>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Donate</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-what-we-do-box">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-light-red">
<span class="icon-water"></span>
<h5>Pure Water <br>For Poor People</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-green">
<span class="icon-groceries"></span>
<h5>Healty Food <br>For Poor People</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-blue">
<span class="icon-heartbeat"></span>
<h5>Medical <br>Facilities for People</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-purple">
<span class="icon-open-book"></span>
<h5>Pure Education <br>For Every Children</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
</div>
</div>
</section> 

<section class="xs-children-section">
<div class="container">
<div class="xs-heading row xs-mb-60">
<div class="col-md-6 mx-auto text-center">
<h2 class="xs-title">Helped Childrens</h2>
<p>Millions of children around the world are in need of a loving family. As a full-service agency</p>
<span class="xs-separetor v3"></span>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="xs-single-children">
 <img src="assets/images/childrens/baby_1.jpg" alt="">
<div class="xs-children-details">
<a href="#">Julian Dow</a>
<h4>New York, USA</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_2.jpg" alt="">
<div class="xs-children-details">
<a href="#">Anjelina</a>
<h4>Buljistan, UK</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_3.jpg" alt="">
<div class="xs-children-details">
<a href="#">Pilaro Mikao</a>
<h4>Frakina, Uganda</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_4.jpg" alt="">
<div class="xs-children-details">
<a href="#">Jhon Hestings</a>
<h4>Bull Land, Iceland</h4>
</div>
</div>
</div>
</div>
<div class="xs-height-separetor"></div>
<div class="row">
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_5.jpg" alt="">
<div class="xs-children-details">
<a href="#">Midado</a>
<h4>Zooka, France</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_6.jpg" alt="">
<div class="xs-children-details">
<a href="#">Anjella</a>
<h4>Linda, Brazil</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_7.jpg" alt="">
<div class="xs-children-details">
<a href="#">Pirlo Kemin</a>
<h4>Lora ken, USA</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-single-children">
<img src="assets/images/childrens/baby_8.jpg" alt="">
<div class="xs-children-details">
<a href="#">Jhuman Li</a>
<h4>Pranklin, UK</h4>
</div>
</div>
</div>
</div>
</div>

</section> 

<section class="xs-section-padding bg-gray">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="xs-donation-form-images">
<img src="assets/images/family.jpg" class="img-responsive" alt="Family Images">
</div>
</div>
<div class="col-lg-6">
<div class="xs-donation-form-wraper">
<div class="xs-heading xs-mb-30">
<h2 class="xs-title">Make a donation</h2>
<p class="small">To learn more about make donate charity with us visit our "<span class="color-green">Contact us</span>" site. By calling <span class="color-green">+44(0) 800 883 8450</span>.</p>
<span class="xs-separetor v2"></span>
</div>
<form action="#" method="POST" id="volunteer-form" class="xs-volunteer-form">
<div class="row">
<div class="col-lg-6">
<input type="text" id="volunteer_name" class="form-control" placeholder="Your Name">
</div>
<div class="col-lg-6">
<input type="email" id="volunteer_email" class="form-control" placeholder="Your Email">
</div>
<div class="col-lg-6">
<select name="branch" class="form-control" id="volunteer_brach">
<option value="">Select</option>
<option value="">Branch</option>
<option value="">New york</option>
<option value="">washington</option>
</select>
</div>
<div class="col-lg-6 xs-mb-20">
<div class="xs-fileContainer">
<input type="file" id="volunteer_cv" class="form-control" name="file">
<label for="volunteer_cv">Upload Your CV</label>
</div>
</div>
</div>
<textarea name="massage" id="massage" placeholder="Enter your massage" cols="30" class="form-control" rows="10"></textarea>
<button type="submit" class="btn btn-primary bg-green">apply now</button>
</form>
</div>
</div>
</div>
</div>
</section> 
</main>
@include('frontend.layout.footer')
@include('frontend.layout.scripts')
</body>
</html>
