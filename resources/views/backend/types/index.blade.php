@extends('backend.layout.master')
@section('main-content')
@section('title1','Types of Events')
@section('title2','Types of Events')
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
					<div class="col-md-6 col-sm-12 ">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Events Type</header>
									
									
								</div>
								<div class="card-body " id="bar-parent">
								    <form method="post" action="{{route('types.store')}}" enctype="multipart/form-data"> 
									@csrf
									
                                        @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
                                    	<div class="form-group">
											<label for="simpleFormPassword">Type of Event</label>
											<input type="text" name="type" class="form-control" id="simpleFormPassword"
												placeholder="Enter title">
                                        </div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
								<div class="col-sm-12 col-md-6 m-auto">
									<div class="card card-topline-aqua">
										<div class="card-head">
						
											<header>
                                            Events Types Table
											</header>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr class="text-center">
															<th>Language</th>
															<th>Type</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($types as $tp)
														<tr class="text-center">
															<td>{{$tp->language}}</td>
															<td>{{$tp->type}}</td>
                                                            <td>
                                                                <a href="{{route('types.edit',$tp->id)}}">
																<button class="btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
																</button>
                                                            	</a>
                                                                <form action="{{route('types.destroy',$tp->id)}}" method="post">
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