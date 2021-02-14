@extends('backend.layout.master')
@section('main-content')
@section('title1','Career Section')
@section('title2','Career Section')
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
						<div class="col-md-8 col-sm-12 m-auto">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Career</header>
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('careers.store')}}" enctype="multipart/form-data"> 
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
												placeholder="Enter title">
                                        </div>
										<div class="row">
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Posted Date</label>
											<input type="date" name="posted_date" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>

										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Closing Date</label>
											<input type="date" name="closing_date" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>
                                        </div>

										<label class="body">Position</label>
                                        <div class="form-group">
											<input type="text" class="form-control" name="position" id="position" placeholder="Enter position..">
										</div>

                                        <label class="body">Description</label>
                                        <div class="form-group">
											<textarea name="body" id="summernote" cols="30" rows="10"></textarea>
										</div>
										
										<button type="submit" class="btn btn-primary mb-4">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
                    <!-- formend -->
				</div>
			</div>



@stop