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
                    <img src="assets/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Gallery</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Educavo</a>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Events Section Start -->
            <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                    @foreach($galleries as $gallery)
                    @foreach(json_decode($gallery->image) as $img)
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="{{('img/gallery')}}/{{$img}}"><img src="{{('img/gallery')}}/{{$img}}" style="height:350px; width:400px;" alt=""></a>
                            </div>
                       </div>
                    @endforeach
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