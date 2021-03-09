@extends('backend.layout.master')
@section('head-section')

<style>
	.inline-form{
		display:inline-block!important;

	}
</style>

@endsection
@section('main-content')
@section('title1','Competitions Categories')
@section('title2','Competitions Categories')
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
								<div class="card-header">
									<strong>Add Events Type</strong>
									
									
								</div>
								<form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data"> 
								<div class="card-body " id="bar-parent">
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
											<input type="text" name="name" class="form-control" id="simpleFormPassword"
												placeholder="Enter title"  required="">
                                        </div>
									<div class="card-footer">
										<center>
										<button type="submit" class="btn btn-primary">Submit</button>
										</center>
									</div>
									</form>
								</div>
							</div>
						</div>
								<div class="col-sm-12 col-md-6 m-auto">
									<div class="card card-topline-aqua">
										<div class="card-head">
						
											<header>
                                            Competirions Categories Table
											</header>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table table-striped custom-table table-hover table-bordered">
													<thead>
														<tr class="text-center">
															<th>Language</th>
															<th>Category</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($category as $cats)
														<tr class="text-center">
															<td>{{$cats->language}}</td>
															<td>{{$cats->name}}</td>
                                                            <td>
                                                                <a href="{{route('categories.edit',$cats->id)}}">
																<button class="btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
																</button>
                                                            	</a>
                                                                <form action="{{route('categories.destroy',$cats->id)}}" method="post">
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