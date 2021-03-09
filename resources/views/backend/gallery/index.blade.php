@extends('backend.layout.master')
@section('head-section')
<style>
	.line-form{
		display:inline-block!important;
	}
</style>
@endsection
@section('main-content')
@section('title1','Photo Gallery')
@section('title2','Photo Gallery')
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
                                            Gallery Table
												<a href="{{route('gallery.create')}}" class="btn btn-md btn-primary float-right">Add Photo</a>
                                            </strong>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr class="text-center">
															<th>Language</th>
															<th>Title</th>
															<th>Images</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
													@foreach($galleries as $gallery)
														<tr  class="text-center">
															<td>{{$gallery->language}}</td>
															<td>{{$gallery->title}}</td>
															<td>
                                                            @foreach(json_decode($gallery->image) as $img)

                                                                <img src="{{asset('/img/gallery/'.$img)}}"
                                                                    class="img-responsive img-thumbnail" style="width: 80px;height: 80px;">

                                                            @endforeach
															</td>
                                                            <td class="m-auto">
                                                                <form action="{{route('gallery.destroy',$gallery->id)}}" method="post" class="inline-form">
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