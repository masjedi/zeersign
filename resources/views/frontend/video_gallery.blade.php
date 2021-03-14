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
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Video Gallery</h1>
                    <ul>
                        <li>
                            <a class="active">Home</a>
                        </li>
                        <li>Video Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Events Section Start -->
            <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                       
                       @foreach($videos as $vid)
                    <div class="media m-4">
                            <div class="media-body">
                                <iframe width="350" height="200" src={{ $vid->v_link  }} frameborder="0" allowfullscreen>
                                </iframe>
                            
                                <h4>{{ $vid->title }}</h4>
                            </div>
                        </div>
                        <br>
                    @endforeach
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->    

        
            
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

        <!-- modernizr js -->
        @include('frontend.layout.scripts')
    </body>
</html>