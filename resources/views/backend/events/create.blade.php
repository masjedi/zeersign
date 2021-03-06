@extends('backend.layout.master')
@section('main-content')
@section('title1','Events')
@section('title2','Events')
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
									<header>Add Event</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
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
										<label>Select event's type</label>
										<select class="form-control" name="type_id" required>
										@foreach($types as $tp)
											<option value="{{$tp->id}}">{{$tp->type}}</option>
										@endforeach
										</select>
									</div>
										<div class="form-group">
											<label for="simpleFormPassword">Title</label>
											<input type="text" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter title">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Status</label>
											<input type="checkbox" name="status" checked data-toggle="toggle" data-size="md">
                                        </div>
                                        
                                        <label class="body">Description</label>
                                        <div class="form-group">
											<textarea name="body" id="summernote" cols="30" rows="5"></textarea>
                                        </div>
                                        <label class="for-vanue">Vanue</label>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="6" name="vanue">
                                            
                                            </textarea>
                                        </div>
                                        <div class="form-group">
											<label for="simpleFormPassword">Date</label>
											<input type="date" name="date" class="form-control"
												placeholder="Chose date....">
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