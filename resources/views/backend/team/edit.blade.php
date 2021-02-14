@extends('backend.layout.master')
@section('main-content')
@section('title1','Team Section')
@section('title2','Team Section')
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
									<header>Edit Member</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('team.update',$members->id)}}" enctype="multipart/form-data"> 
									{{method_field('put')}}
									@csrf
                                    <div class="form-group">
												<label>Language</label>
												<select class="form-control" name="language" required>
													<option value="{{$members->language}}" selected >{{$members->language}}</option>
													<option value="Pashto">Pashto</option>
													<option value="Dari">Dari</option>
													<option value="English">English</option>
												</select>
											</div>
										<div class="form-group">
											<label for="simpleFormPassword">Name</label>
											<input type="text" name="name" value="{{$members->name}}" class="form-control" id="simpleFormPassword"
												placeholder="Enter title">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Positon</label>
											<input type="text" name="position" value="{{$members->position}}" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Twitter</label>
											<input type="text" name="twitter" value="{{$members->twitter}}" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Facebook</label>
											<input type="text" name="facebook" value="{{$members->facebook}}" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Linkedin</label>
											<input type="text" name="facebook" value="{{$members->linkedin}}" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>
										
                                        <label class="body">Bio</label>
                                        <div class="form-group">
										<textarea name="bio" id="summernote"  cols="30" rows="10">
										{!!$members->bio!!}
										</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="image"></label>
                                            <input type="file" class="form=control" name="image">
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