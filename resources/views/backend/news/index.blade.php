@extends('backend.layout.master')
@section('head-section')
	<style>
		.inline-form{
			display:inline-block!important;
		}
	</style>

@endsection
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
								<div class="col-sm-12 col-md-12">
									<div class="card card-topline-aqua">
										<div class="card-header">
						
											<strong>
                                            News Table
												<a href="{{route('news.create')}}" class="btn btn-md btn-primary float-right">Add News</a>
                                            </strong>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table table-striped custom-table table-hover table-bordered">
													<thead>
														<tr>
															<th>Title</th>
															<th>Subtitle</th>
															<th>Image</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($blogs as $blog)
														<tr>
															<td>{{$blog->title}}</td>
															<td>{{$blog->sub_title}}</td>
                                                            <td>
																<img src="{{asset('img/blog')}}/{{$blog->image}}"
																style="height:80px; width:100px;">
															</td>
                                                            <td>
                                                                <a href="{{route('news.edit',$blog->id)}}"><button class="btn btn-success btn-xs inline-form"><i class="fa fa-edit"></i>
                                                            </button></a>
                                                                <form action="{{route('news.destroy', $blog->id)}}" method="post" class="inline-form">
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