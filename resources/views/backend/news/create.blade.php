@extends('backend.layout.master')
@section('main-content')
@section('title1','News Section')
@section('title2','News Section')
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
									<header>Add New Post</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data"> 
									@csrf
                                    @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
										<div class="form-group">
											<label for="simpleFormPassword">Post Title</label>
											<input type="text" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter title" required="">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Post Subtitle</label>
											<input type="text" name="sub_title" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle" required="">
                                        </div>
                                        <label class="body">Post Description</label>
                                        <div class="form-group">
										<textarea name="body" id="summernote" required="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="image"></label>
                                            <input type="file" class="form=control" name="image" required="">
                                        </div>

										<div class="card-footer">
											<center>
											<button type="submit" class="btn btn-primary">Submit</button>

											</center>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                    <!-- formend -->
				</div>
			</div>



@stop