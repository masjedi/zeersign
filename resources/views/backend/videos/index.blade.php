@extends('backend.layout.master')
@section('head-section')
	<style>
		.inline-form{
			display:inline-form!important;
		}
	</style>
@endsection
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
										<div class="card-header">
						
											<strong>
                                            Video Gallery
                                            </strong>
												<a href="{{route('videos.create')}}" class="btn btn-md btn-primary float-right">Add Video</a>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table table-striped custom-table table-hover table-bordered">
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
																	<a href="{{route('videos.edit',$video->id)}}"><button class="btn btn-success btn-xs inline-form"><i class="fa fa-edit"></i>
																</button></a>
																	<form action="{{route('videos.destroy',$video->id)}}" method="post" class="inline-form">
																		{{csrf_field()}}
																		{{method_field('delete')}}
																		<button class="btn btn-danger btn-xs inline-form" type="submit"><i class="fa fa-trash"></i></button>
																		
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