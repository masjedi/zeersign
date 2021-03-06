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
            <div class="col-md-8 col-sm-12 m-auto">
                <div class="card card-box">
                    <div class="card-header">
                        <strong>Edit Bid</strong>
                    </div>
                    <form method="post" action="{{route('bids.update',$bids->id)}}" enctype="multipart/form-data">
                        <div class="card-body " id="bar-parent">
                            {{method_field('put')}}
                            @csrf
                            @if(LaravelLocalization::getCurrentLocale()=='en')
                                <input type="hidden" name="language" value="English">
                            @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                <input type="hidden" name="language" value="Dari">
                            @else
                                <input type="hidden" name="language" value="Pashto">
                            @endif
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="simpleFormPassword">Posted Date</label>
                                    <input type="date" name="posted_date"  class="form-control" value="{{$bids->posted_date}}"
                                           placeholder="Enter date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="simpleFormPassword">Closing Date</label>
                                    <input type="date" name="closing_date" value="{{$bids->closing_date}}" class="form-control" id="simpleFormPassword"
                                           placeholder="Enter closing date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="simpleFormPassword">Title</label>
                                <input type="text" name="title" value="{{$bids->title}}" class="form-control" id="simpleFormPassword"
                                       placeholder="Enter subtitle">
                            </div>

                            <label class="body">Description</label>
                            <div class="form-group">
											<textarea name="body" id="summernote" cols="30" rows="10">
												{!!$bids->body!!}
											</textarea>
                            </div>
                            <div class="form-group">
                                <label class="image">Biding Document</label>
                                <input type="file" class="form-control" name="file" >
                            </div>
                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary mb-4">Submit</button>

                            </center>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- formend -->
    </div>
</div>



@stop
