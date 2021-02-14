@extends('backend.layout.master')
@section('main-content')
@section('title1','Events Section')
@section('title2','Events Section')
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
									<header>Edi Events</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('events.update',$events->id)}}" enctype="multipart/form-data"> 
									{{method_field('put')}}
                                    @csrf
                                    <div class="form-group">
												<label>Language</label>
												<select class="form-control" name="language" required>
													<option value="{{$events->language}}" selected >{{$events->language}}</option>
													<option value="Pasto">Pashto</option>
													<option value="Dari">Dari</option>
													<option value="English">English</option>
												</select>   
											</div>
										<div class="form-group">
											<label for="simpleFormPassword">Title</label>
											<input type="text"  value="{{$events->title}}" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter title">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Subtitle</label>
											<input type="text"  value="{{$events->sub_title}}" name="sub_title" class="form-control" id="simpleFormPassword"
												placeholder="Enter title">
                                        </div>
                                        <label class="body">Description</label>
										<div class="form-group">
											<textarea   name="body" id="summernote" cols="30" rows="10">
											{!!$events->body!!}"
											</textarea>
                                        </div>
										Vanue/Address
                                        <div class="form-group">
                                        <textarea class="form-control" placeholder="Vanue  ..." rows="8"  name="vanue">
                                            {!!$events->vanue!!}
                                        </textarea>
                                        </div>
                                        <div class="form-group">
											<label for="simpleFormPassword">Date</label>
											<input type="text"  value="{{$events->date}}" name="date" class="form-control" id="simpleFormPassword"
												placeholder="Enter date">
                                        </div>
                                        <div class="form-group">
                                            <label class="image"></label>
                                            <input type="file" class="form=control" value="{{asset('img/events')}}/{{$events->image}}">
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