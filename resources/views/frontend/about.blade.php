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
							<h1 class="page-title">About Us</h1>
							<ul>
								<li>
									<a class="active" href="index.html">Home</a>
								</li>
								<li>About Us</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="assets/images/about/about2orange.png" alt="About Image">
							</div>
						</div>
						<div class="col-lg-6 pr-70 md-pr-15 text-justify">
							<div class="sec-title">
								<div class="sub-title orange">About Educavo</div>
								<h2 class="title mb-17">Welcome to The POOHA Organization</h2>
								<div class="bold-text mb-22"></div>
								<div class="desc">Pervasive organization for human awareness (POOHA) is non‐profitable, non‐political
and non‐government organization established in 2020 which is registered in the ministry of
economy with registration number (4905), by a team that has been working to make a better
society for life. This team decided to start their help in form of an organization and help children,
youths and women by providing them enough opportunities for education, awareness,
development of their economic and social life in order to have an educated and bright
Afghanistan.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Section End -->

			<!-- Counter Section Start -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="mission">
							<h2 class="text-center">Mission <i class="fa fa-bullseye"></i></h2>
							<p>We empower children, youths
							and women to grow ahead in
							life be supporting and giving
							them education, awareness,
							increasing capacity building,
							develop their economic,
							involving them in social
							activities and provide them
							health services</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content p-70">
							<div class="vision">
								<h2 class="text-center">Vision <i class="fa fa-eye"></i></h2>
								<p>A bright Afghanistan where
								every person is educated,
								have the opportunity to
								develop optimally and
								contribute to all aspects of
								life.</p>
							</div>
</div>
					</div>
				</div>
			</div>
			<!-- Counter Section End -->

			<!-- About Section End -->
         

			<!-- Testimonial Section End -->

			
			<!-- Partner End -->

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