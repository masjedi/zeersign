<!DOCTYPE html>
<html lang="zxx">
	@include('frontend.layout.head')
    <body class="defult-home">
        
        <!--Preloader area start here-->
		<div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{asset('assets/images/pre-logo1.png')}}" alt="">
		        </div>
		    </div>
		</div>
        
        <div class="full-width-header header-style2">
            <!--Header Start-->
            @include('frontend.layout.header')
            <!--Header End-->
        </div>

		<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{asset('assets/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Who we are?</h1>
							<ul>
								<li>
									<a class="active" href="index.html">Home</a>
								</li>
								<li>Who we are?</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container" id="whoweare">
					<div class="row align-items-center">
						<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="{{asset('assets/images/about/about2orange.png')}}" alt="About Image">
							</div>
						</div>
						<div class="col-lg-6 pr-70 md-pr-15 text-justify">
							<div class="sec-title">
								<div class="sub-title orange">Who we Are?</div>
								<h2 class="title mb-17">Welcome to The POOHA Organization</h2>
								<div class="bold-text mb-22"></div>
								<div class="desc">Afghanistan is one of the developing countries. After 2001 Afghanistan started a good
relationship with other countries and international organizations and stepped to developing from
a critical situation. After 18 years of struggles of international committees and organizations still,
Afghanistan is the country that faces a lot of challenges.
According to a report from National statistical and informational authorities, the population of
Afghanistan is estimated 32.2 million in the year of 2019, in case that 15.8 million of them are
male and 16.4 million of them are female.
Moreover, 49.66 percent of the population is eligible to work while 30.7 percent of them are
unemployed, and it shows the worst situation for youths. In addition, 49.67 percent of the
population is under 15 years old,
reports show that 2.7 percent of children are labor in hard works and only 9.2 million of them
are going to school. It means more than 40 percent of children can’t go to schools many of which
are girls.
On the other hand, the number of people who are addicted to drug crosses more than 4 million
and they are in a very bad situation the majority of which are youths who are the power and the
base of a society. In reports from Afghanistan independent human rights commission, it is said
that in the year 2019 we recorded 2762 cases of violence against women and every year it
increases. Based on this statistical evaluations and Afghanistan social and economic situation a
team came together for helping children, youths, and women in order to improve their life and
education with the support of national and international organizations.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@include('frontend.layout.newsletter')	
        </div> 
        <!-- Main content End --> 

        <!-- Footer Start -->
       @include('frontend.layout.footer')
        <!-- Footer End -->

		@include('frontend.layout.scripts')
</body>

</html>