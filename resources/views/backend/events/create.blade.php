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
                                        @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
									<div class="form-group">
										<label>Select event's type</label>
										<select class="form-control" name="type_id" required>
										@foreach($types as $tp)
											<option value="{{$tp->id}}">{{$tp->type}}</option>
										@endforeach
										</select>
									</div>
										<div class="form-group">
											<label for="simpleFormPassword">Event Title</label>
											<input type="text" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter title">
                                        </div>
										<div class="form-group">
											<label for="simpleFormPassword">Event Subtitle</label>
											<input type="text" name="sub_title" class="form-control" id="simpleFormPassword"
												placeholder="Enter subtitle">
                                        </div>
                                        <label class="body">Event Description</label>
                                        <div class="form-group">
											<textarea name="body" id="summernote" cols="30" rows="5"></textarea>
                                        </div>
                                        <label class="for-vanue">Event Vanue</label>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="6" name="vanue">

                                            </textarea>
                                        </div>
                                        <div class="form-group">
											<label for="simpleFormPassword">Event Date</label>
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
