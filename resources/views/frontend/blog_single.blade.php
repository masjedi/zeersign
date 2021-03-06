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
                    <img src="{{asset('assets/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Blog Details</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{url('/')}}">Home</a>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

	       <!-- Blog Section Start -->
        @foreach($blogs as $blog)
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">
                        <div class="bs-img">
                            <img src="{{asset('img/blog')}}/{{$blog->image}}" alt="">
                        </div>
                       <div class="blog-full">
                                   <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{$blog->date}} </span>
                               
                                       <h2>{{$blog->title}}</h2>
                           
                           <div class="blog-desc">
                               <p>
                                    {!!$blog->body!!}   
                            </p>
                           </div>
                       </div>
                   </div>
                   <div class="ps-navigation">
                       <ul class="float-left">
                           <li><a href="{{url('blog_news')}}"><span><i class="fa fa-arrow-left"></i>Back</span></a></li>
                       </ul>
                   </div>
                </div>
            </div>
        @endforeach
            <!-- Blog Section End -->  

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