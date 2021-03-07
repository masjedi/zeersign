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
									<header>Edit Video</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('videos.update',$videos->id)}}" enctype="multipart/form-data"> 
									{{method_field('put')}}
									@csrf
                                    @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
										<div class="form-group">
											<label for="simpleFormPassword">Title</label>
											<input type="text" name="title" value="{{$videos->title}}" class="form-control" id="simpleFormPassword"
												placeholder="Enter video title">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Video Link</label>
											<input type="text" name="v_link" value="{{$videos->v_link}}" class="form-control" id="simpleFormPassword"
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