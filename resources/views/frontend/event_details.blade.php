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
                    <h1 class="page-title">Event Details</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{url('/')}}">Home</a>
                        </li>
                        <li>Event Details</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

	       <!-- Blog Section Start -->
        @foreach($events as $event)
            <div class="rs-inner-blog orange-color pt-100  md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">
                        <div class="bs-img">
                            <img src="{{asset('img/events')}}/{{$event->image}}" alt="">
                        </div>
                       <div class="blog-full">
                                   <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{$event->date}} </span>
                               
                                       <h2>{{$event->title}}</h2>
                           
                           <div class="blog-desc">
                               <p>
                                    {!!$event->body!!}   
                            </p>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        @endforeach

        <div class="container pb-100">
            <ul class="float-left">
                <li><a href="{{url('/')}}"><span><i class="fa fa-arrow-left"></i>Back</span></a></li>
            </ul>
        </div>
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