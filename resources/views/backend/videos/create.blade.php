@extends('backend.layout.master')
@section('main-content')
@section('title1','Video Gallery')
@section('title2','Video Gallery')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">@yield('title1')</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">@yield('title2')</li>
							</ol>
						</div>
					</div>
                    <!-- start widget -->
                    <div class="row">
						<div class="col-md-8 col-sm-12 offset-2">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Video</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('videos.store')}}" enctype="multipart/form-data"> 
									@csrf
                                    <div class="form-group">
												<label>Language</label>
												<select class="form-control" name="language" required>
													<option value="#" selected disabled>Select language</option>
													<option value="Pashto">Pashto</option>
													<option value="Dari">Dari</option>
													<option value="English">English</option>
												</select>
											</div>
										<div class="form-group">
											<label for="simpleFormPassword">Title</label>
											<input type="text" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter video title">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Video Link</label>
											<input type="text" name="v_link" class="form-control" id="simpleFormPassword"
												placeholder="Enter video link from youtube">
                                        </div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
                    <!-- formend -->
				</div>
			</div>



@stop