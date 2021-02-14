<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 10:43:09 GMT -->
@include('backend.layout.head')
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		@include('backend.layout.header')
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			@include('backend.layout.sidebar')
            @section('main-content')
            
            
            @show
		</div>
		<!-- end page container -->
		<!-- start footer -->
		@include('backend.layout.footer')
		<!-- end footer -->
	</div>
    <!-- start js include path -->
    @include('backend.layout.scripts')
	@include('sweetalert::alert')
	<!-- end js include path -->
</body>
</html>