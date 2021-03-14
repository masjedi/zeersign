<!DOCTYPE html>
<html lang="zxx">
    
@include('frontend.layout.head')
    <body class="defult-home event-bg">
        
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
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{asset('assets/images/breadcrumbs/5.jpg')}}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title white-color">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row rs-contact-box mb-90 md-mb-50">
        				<div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
        					<div class="address-item">
        						<div class="icon-part">
        							<img src="assets/images/contact/icon/1.png" alt="">
        						</div>
        						<div class="address-text">
                                    <span class="label">Address</span>
                                    <span class="des">Shahr-e Naw, Kabul, Afghanistan</span>
                                </div>
        					</div>
        				</div>
                        <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                            <div class="address-item">
                                <div class="icon-part">
                                    <img src="assets/images/contact/icon/2.png" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label">Email Address</span>
                                    <span class="des"><a href="mailto:info@pooha.com">info@pooha.com</a></span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                            <div class="address-item">
                                <div class="icon-part">
                                    <img src="assets/images/contact/icon/3.png" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number</span>
                                    <span class="des"><a href="tel%2b0885898745.html">(+93)730-827353</a></span>
                                </div>
                            </div>
                        </div>
            		</div>
            		<div class="row align-items-center" id="contactform">
            			<div class="col-lg-6 md-mb-30">
            				<!-- Map Section Start --> 
                            <div class="contact-map3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.6177933342756!2d69.1670026146164!3d34.53791019942824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d16f7f7b900e3b%3A0xa1c75408efbcd26c!2zU2hhaHJlIE5hdyBUb3dlciDYqNix2Kwg2LTZh9ix2YbZiA!5e0!3m2!1sen!2s!4v1615627768300!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>     
                        </div>
            			</div>
            			<div class="col-lg-6 pl-60 md-pl-15">
			        		<div class="contact-comment-box">
			        			<div class="inner-part text-center">
                                    <h2 class="title mb-mb-15">Get In Touch</h2>
                                    <p>Have some suggestions or just want to say hi? Our  support team are ready to help you 24/7.</p>
                                </div>
			                    <div id="form-messages"></div>
								<form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">
									<fieldset>
										<div class="row">
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                            </div>
                                         
                                            <div class="col-lg-12 mb-50">
                                                <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                            </div>
										</div>
										<div class="form-group mb-0">
											<input class="btn-send" type="submit" value="Submit Now">
										</div>										   
									</fieldset>
								</form>
			        		</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->  
        @include('frontend.layout.newsletter')
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

        <!-- Search Modal End -->

       @include('frontend.layout.scripts')
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/educavo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 07:12:14 GMT -->
</html>