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
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Blogs/News</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Blog/News</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Popular Courses Section Start -->
            <div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="{{url('blog_single',$blog->id)}}">
                                      <img src="{{asset('img/blog')}}/{{$blog->image}}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">{{$blog->date}}</span></li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">
                                            {{$blog->title}}
                                        </a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="btn-part">
                                            <a href="{{url('blog_single',$blog->id)}}">Read More...<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->

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

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        @include('frontend.layout.scripts')
    </body>
</html>