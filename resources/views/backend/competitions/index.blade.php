@extends('backend.layout.master')
@section('head-section')
    <style>
        .inline-form{
            display: inline-block!important;
        }
    </style>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('main-content')
@section('title1','Competitions Section')
@section('title2','Competitions Section')
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
                                <strong>Competitions List</strong>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('competitions.create')}}" class="btn btn-sm btn-info text-center ml-4">Add New Competitions</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table class="table table-striped custom-table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Competitions Title</th>
                                    <th>Competitions Category</th>
                                    <th>Competitions Date</th>
                                    <th>Competitions Status</th>
                                    <th>View Registrations</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($competitions as $compets)
                                    <tr>
                                        <td>{!!$compets->title!!}</td>
                                        <td>{{$compets->competcat['name']}}</td>
                                        <td>{!!$compets->date!!}</td>
                                        <td>
                                            <input data-id="{{$compets->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"  data-off="Closed" data-on="Open" {{ $compets->status ? 'checked' : '' }}>
                                        </td>
                                        <td><a class="btn btn-info btn-sm my-2">Registrations<i class="fa fa-eye"></i></a></td>
                                        <td >
                                            <a  class="btn btn-primary btn-xs inline-form" href="{{route('competitions.edit',$compets->id)}}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{route('competitions.destroy',$compets->id)}}" method="post" class="inline-form">
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
@section('scripts')

    <script>

        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var competcat_id = $(this).data('id');
                $.ajax({
                    type: "POST" ,
                    dataType: "json",
                    url: "{{url('status-change')}}",
                    data: {'_token':'{{csrf_token()}}','status': status, 'competcat_id': competcat_id},
                    success: function(data){
                        alert(data.success)
                    }
                });
            })
        })
    </script>

@endsection
