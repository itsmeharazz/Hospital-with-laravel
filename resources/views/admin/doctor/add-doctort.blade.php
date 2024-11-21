@extends('admin.layouts.template')
@section('page-title')
Add Doctor
@endsection
@section('content')
<div class="row">
     <div class="col-md-12 mx-auto">
          <div class="card">
               <div class="card-header">
                    <div class="card-title">Add Doctor</div>
               </div>
               <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                         <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                         </ul>
                    </div>
                    @endif
                    <form action="{{route('storeDoctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Doctor Name</label>
                                        <input type="text" name="doctor_name" placeholder="Doctor Name"
                                             class="form-control">
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Deparment</label>
                                        <select name="deparment_id" id="" class="form-control">
                                             <option value="">Deparment</option>
                                             @foreach($showdeparment as $deparmentoption)
                                             <option value="{{$deparmentoption->id}}"> {{$deparmentoption->deparment_name}}</option>
                                             @endforeach
                                             
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Degrees</label>
                                        <input type="text" name="doctor_degree" placeholder="Doctor Degrees" class="form-control">
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Designation</label>
                                        <input type="text" name="doctor_designation" placeholder="Doctor Designation" class="form-control">
                                   </div>
                              </div>

                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Time to see the patient</label>
                                        <input type="text" class="form-control" name="date" placeholder="Time to see the patient">
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Room Number</label>
                                        <input type="number" class="form-control" name="room_number" placeholder="Room number">
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Doctor Image</label>
                                        <input type="file" class="form-control" name="doctor_image" placeholder="Doctor Image">
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Contact Number</label>
                                        <input type="number" class="form-control" name="contact_number" placeholder="Contact NUmber">
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Fee</label>
                                        <input type="number" class="form-control" name="fee" placeholder="Fee">
                                   </div>
                              </div>

                         </div>
                         <div class="form-group">
                              <input type="submit" value="Add Doctor" class="btn btn-primary">
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection