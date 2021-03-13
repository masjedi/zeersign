<!DOCTYPE html>
<html lang="zxx">
	@include('frontend.layout.head')
    <body class="defult-home">
        
        <!--Preloader area start here-->
		<div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo1.png" alt="">
		        </div>
		    </div>
		</div>
        
        <div class="full-width-header header-style1 home8-style4">
            <!--Header Start-->
            @include('frontend.layout.header')
            <!--Header End-->
        </div>

		<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">What we do?</h1>
							<ul>
								<li>
									<a class="active" href="index.html">Home</a>
								</li>
								<li>What we do?</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->


			<!-- About Section Start -->
			<div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="assets/images/about/history.png" alt="About Image">
							</div>
                            <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab" href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span class="icon-part"><i class="flaticon-banknote"></i></span>POOHA Overview</a>
                                </li>
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i class="flaticon-flower"></i></span>POOHA Mission</a>
                                </li>
                                <li class="nav-item tab-btns single-history last-item">
                                    <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i class="flaticon-analysis"></i></span>POOHA Vision</a>
                                </li>
                            </ul>
						</div>
						<div class="offset-lg-1"></div>
						<div class="col-lg-5">
							<div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="about-history" role="tabpanel" aria-labelledby="about-history-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Educavo Overview</h2>
                                        <div class="desc text-justify">Afghanistan is one of the developing countries. After 2001 Afghanistan started a good
relationship with other countries and international organizations and stepped to developing from
a critical situation. After 18 years of struggles of international committees and organizations still,
Afghanistan is the country that faces a lot of challenges.
According to a report from National statistical and informational authorities, the population of
Afghanistan is estimated 32.2 million in the year of 2019, in case that 15.8 million of them are
male and 16.4 million of them are female.</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/images/about/tab1.jpg" alt="Tab Image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">POOHA Mission</h2>
                                        <div class="desc text-justify">We empower children, youths
										and women to grow ahead in
										life be supporting and giving
										them education, awareness,
										increasing capacity building,
										develop their economic,
										involving them in social
										activities and provide them
										health services
									</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/images/about/tab2.jpg" alt="Tab Image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">POOHA Vision</h2>
                                        <div class="desc text-justify">A bright Afghanistan where
every person is educated,
have the opportunity to
develop optimally and
contribute to all aspects of
life.</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/images/about/tab3.jpg" alt="Tab Image">
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
                    <!-- Intro Info Tabs-->
                    <div class="intro-info-tabs">
                        
                    </div>
				</div>
			</div>
			<!-- About Section End -->
         

			<!-- Testimonial Section End -->

			<!-- Partner End -->
			@include('frontend.layout.newsletter')
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End --> 

        <!-- Footer Start -->
       @include('frontend.layout.footer')
        <!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp" class="orange-color">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		
		@include('frontend.layout.scripts')
</body>

<!-- Mirrored from keenitsolutions.com/products/html/educavo/about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 07:11:18 GMT -->
</html>