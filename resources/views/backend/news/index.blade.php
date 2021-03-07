@extends('backend.layout.master')
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
										<div class="card-head">
						
											<header>
                                            News Table
												<a href="{{route('news.create')}}" class="btn btn-md btn-primary text-center ml-4">Add News</a>
                                            </header>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr>
															<th>Language</th>
															<th>Title</th>
															<th>Subtitle</th>
															<th>Image</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($blogs as $blog)
														<tr>
															<td>{{$blog->language}}</td>
															<td>{{$blog->title}}</td>
															<td>{{$blog->sub_title}}</td>
                                                            <td>
																<img src="{{asset('img/blog')}}/{{$blog->image}}"
																style="height:80px; width:100px;">
															</td>
                                                            <td class="m-auto">
                                                                <a href="{{route('news.edit',$blog->id)}}"><button class="btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
                                                            </button></a>
                                                                <form action="{{route('news.destroy', $blog->id)}}" method="post">
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