@extends('backend.layout.master')
@section('head-section')
    <style>
        .inline-form{
            display: inline-block!important;
        }
    </style>
@endsection
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Career Table</strong>
                            </div>

                        <div class="col-md-6 text-right">
                            <a href="{{route('careers.create')}}" class="btn  btn-primary text-center ml-4">Add New Position</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table class="table table-striped custom-table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Position Type</th>
                                    <th>Posting Date</th>
                                    <th>Closing Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($careers as $career)
                                    <tr class="active">
                                        <td>{{$career->position}}</td>
                                        <td>{{$career->position_type}}</td>
                                        <td>{{$career->posted_date}}</td>
                                        <td>{{$career->closing_date}}</td>

                                        <td>
                                            <a href="{{route('careers.edit',$career->id)}}"><button class="inline-form btn btn-success btn-sm my-2"><i class="fa fa-edit"></i>
                                                </button></a>
                                            <form action="{{route('careers.destroy',$career->id)}}" method="post" class="inline-form">
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
