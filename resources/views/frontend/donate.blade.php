<!DOCTYPE html>
<html lang="zxx">
@include('frontend.layout.head')
    <body class="defult-home">
        
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
        
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
                   <div class="rs-quick-contact">
                        <div class="inner-part text-center mb-50">
                            <h2 class="title mb-15">Quick Contact</h2>
                            <p>If you are willing to donate and help poors, please let us know by filling the form bellow.</p>
                        </div>
                            <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <div class="row">
                                <div class="col-lg-6 mb-35 col-md-12">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div> 
                                <div class="col-lg-6 mb-35 col-md-12">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                </div>   
                                <div class="col-lg-6 mb-35 col-md-12">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                </div>   
                                <div class="col-lg-6 mb-35 col-md-12">
                                    <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                </div>
                             
                                <div class="col-lg-12 mb-50">
                                    <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <input class="btn-send" type="submit" value="Submit Now">
                            </div>       
                        </form>
                   </div> 
            	</div>
            </div>
            <!-- Contact Section End -->  

            <!-- Newsletter section start -->
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

    
        <!-- Search Modal End -->

        
       @include('frontend.layout.scripts')
    </body>
</html>