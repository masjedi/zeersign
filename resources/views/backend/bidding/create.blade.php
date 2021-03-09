@extends('backend.layout.master')
@section('main-content')
@section('title1','Bidding Section')
@section('title2','Bidding Section')
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
								<div class="card-header">
									<strong>Add Bids</strong>
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('bids.store')}}" enctype="multipart/form-data"> 
									@csrf
                                    @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
									<div class="row">
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Posted Date</label>
											<input type="date" name="posted_date" class="form-control" id="simpleFormPassword"
												placeholder="Enter date" required="">
                                        </div>

										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Closing Date</label>
											<input type="date" name="closing_date" class="form-control" id="simpleFormPassword"
												placeholder="Enter closing date" required="">
                                        </div>
                                    </div>
										<div class="form-group">
											<label for="simpleFormPassword">Title</label>
											<input type="text" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter title" required="">
                                        </div>

                                        <label class="body">Description</label>
                                        <div class="form-group">
											<textarea name="body" id="summernote" cols="30" rows="10" required=""></textarea>
										</div>
									<div class="card-footer">
										<center>

										<button type="submit" class="btn btn-primary mb-4">Submit</button>
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