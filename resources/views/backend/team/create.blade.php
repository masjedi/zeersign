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
								<div class="card-header">
									<strong>Add New Member</strong>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('team.store')}}" enctype="multipart/form-data"> 
									@csrf
									@if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
									<div class="row">
										<div class="form-group col-md-12">
											<label for="simpleFormPassword">Name</label>
											<input type="text" name="name" class="form-control" id="simpleFormPassword"
												placeholder="Enter name..." required="">
                                        </div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Positon</label>
											<input type="text" name="position" class="form-control" id="simpleFormPassword"
												placeholder="Enter position..."  required="">
                                        </div>

									
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Twitter</label>
											<input type="text" name="twitter" class="form-control" id="simpleFormPassword"
												placeholder="Enter twitter link"  required="">
                                        </div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Facebook</label>
											<input type="text" name="facebook" class="form-control" id="simpleFormPassword"
												placeholder="Enter facebook link"  required="">
                                        </div>
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Linkedin</label>
											<input type="text" name="linkedin" class="form-control" id="simpleFormPassword"
												placeholder="Enter linkedin link"  required="">
                                        </div>
									</div>
										
                                        <label class="body">Member's Bio</label>
                                        <div class="form-group">
										<textarea name="bio" id="summernote"  required="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="image"></label>
                                            <input type="file" class="form=control" name="image"  required="">
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