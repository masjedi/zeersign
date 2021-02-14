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
								<div class="col-sm-12 col-md-12">
									<div class="card card-topline-aqua">
										<div class="card-head">
						
											<header>
                                            Bids Table
												<a href="{{route('bids.create')}}" class="btn btn-md btn-primary text-center ml-4">Add Post</a>
                                            </header>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr class="text-center">
															<th>Language</th>
															<th>Posted Date</th>
															<th>Closing Date</th>
															<th>Title</th>
															<th>Body</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($bids as $bid)
														<tr>
															<td>{{$bid->language}}</td>
															<td>{{$bid->posted_date}}</td>
															<td>{{$bid->closing_date}}</td>
															<td>{{$bid->title}}</td>
															<td>{!!$bid->body!!}</td>
                                                            <td class="m-auto">
                                                                <a href="{{route('bids.edit',$bid->id)}}">
																<button class="btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
																</button>
                                                            	</a>
                                                                <form action="{{route('bids.destroy',$bid->id)}}" method="post">
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