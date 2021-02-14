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
                                            Career Table
												<a href="{{route('careers.create')}}" class="btn btn-md btn-primary text-center ml-4">Add News</a>
                                            </header>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr>
															<th>Language</th>
															<th>Posting Date</th>
															<th>Closing Date</th>
															<th>Position</th>
															<th>Body</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($careers as $career)
														<tr class="active">
														<td>{{$career->language}}</td>
														<td>{{$career->posted_date}}</td>
														<td>{{$career->closing_date}}</td>
														<td>{{$career->position}}</td>
														<td>{!!$career->body!!}</td>
                                                        
                                                            <td class="m-auto">
                                                                <a href="{{route('careers.edit',$career->id)}}"><button class="btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
                                                            </button></a>
                                                                <form action="{{route('careers.destroy',$career->id)}}" method="post">
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