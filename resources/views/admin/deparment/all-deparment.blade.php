@extends('admin.layouts.template')
@section('page_title')
All Deparment
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Deparment</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if (session()->has('message'))
                    <div class="alert alert-success"> {{ session()->get('message') }} </div>
                    @endif
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Deparment Name</th>
                                <th>Doctors Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($deparment as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td> {{$item->deparment_name}}</td>
                                <td>{{$item->doctor_count}}</td>
                                <td>
                                    <a href="{{route('editeDeparment',$item->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('deleteDeparment',$item->id)}}" class="btn btn-danger">Delete</a>
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
@endsection