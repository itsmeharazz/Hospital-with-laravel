@extends('admin.layouts.template')
@section('page_title')
All Doctors
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Doctors</h4>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Deparment</th>
                                <th>Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach ($Doctors as $doctors_list)
                                    <tr>
                                        <td>{{ $doctors_list->id }}</td>
                                        <td>
                                            <img src="{{ asset($doctors_list->img) }}" alt=""
                                                style="width: 80px;height:80px;">
                                        </td>
                                        <td> {{ $doctors_list->doctor_name }} </td>
                                        <td>{{ $doctors_list->deparment_name }}</td>
                                        <td>{{ $doctors_list->contact_number }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="{{route('editeDoctor', $doctors_list->id)}}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="{{route('deleteDoctor', $doctors_list->id)}}" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
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