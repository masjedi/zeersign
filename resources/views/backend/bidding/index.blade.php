@extends('backend.layout.master')
@section('head-section')
    <style>
        .inline-form{
            display: inline-block!important;
        }
    </style>
@endsection
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
										<div class="card-header">

                                           <strong> Bids Table</strong>
												<a href="{{route('bids.create')}}" class="btn btn-md btn-primary float-right">Add Bids</a>

										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table table-striped custom-table table-hover table-bordered">
													<thead>
														<tr>
                                                            <th>Title</th>
                                                            <th>Posted Date</th>
															<th>Closing Date</th>
															<th>Bid Documents </th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($bids as $bid)
														<tr>
                                                            <td>{{$bid->title}}</td>
                                                            <td>{{$bid->posted_date}}</td>
															<td>{{$bid->closing_date}}</td>
                                                            <td>{{$bid->file}}</td>
															<td >
															<a  class="btn btn-primary btn-xs inline-form" href="{{route('bids.edit',$bid->id)}}">
																<i class="fa fa-pencil"></i>
															</a>
															<form action="{{route('bids.destroy',$bid->id)}}" method="post" class="inline-form">
																{{csrf_field()}}
																{{method_field('delete')}}
																<button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash-o "></i></button>
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
