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
										>Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">@yield('title2')</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row">
								<div class="col-sm-12 col-md-12">
									<div class="card card-topline-aqua">
										<div class="card-head">
						
											<header>
                                            Video Gallery
												<a href="{{route('videos.create')}}" class="btn btn-md btn-primary text-center ml-4">Add Video</a>
                                            </header>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr>
															<th>language</th>
															<th>Title</th>
															<th>Video Link</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($videos as $video)
														<tr class="active">

															<td>{{$video->language}}</td>
															<td>{{$video->title}}</td>
															<td>{{$video->v_link}}</td>
															
															<td class="m-auto">
																	<a href="{{route('videos.edit',$video->id)}}"><button class="btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
																</button></a>
																	<form action="{{route('videos.destroy',$video->id)}}" method="post">
																		{{csrf_field()}}
																		{{method_field('delete')}}
																		<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
																		
																	</form>
															</td>
														</tr>
													@endforeach
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
					
				</div>
			</div>



@stop