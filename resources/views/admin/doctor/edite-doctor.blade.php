@extends('admin.layouts.template')
@section('page-title')
Update Doctor Profile
@endsection
@section('content')
<div class="row">
     <div class="col-md-12 mx-auto">
          <div class="card">
               <div class="card-header">
                    <div class="card-title">Update Doctor Profile</div>
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
                    <form action="{{route('storeDoctor')}}" method="POST">
                    @csrf
                    <input type="hidden" name="update" value="{{$doctor_info->id}}">
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Doctor Name</label>
                                        <input type="text" name="doctor_name"  value="{{$doctor_info->doctor_name}}"
                                             class="form-control">
                                   </div>
                              </div>
                             
                         </div>
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Degrees</label>
                                        <input type="text" name="doctor_degree" value="{{$doctor_info->degrees}}" class="form-control">
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Designation</label>
                                        <input type="text" name="doctor_designation" value="{{$doctor_info->designation}}"  class="form-control">
                                   </div>
                              </div>

                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Time to see the patient</label>
                                        <input type="text" class="form-control" name="date" value="{{$doctor_info->time_to_patient}}">
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Room Number</label>
                                        <input type="number" class="form-control" name="room_number" value="{{$doctor_info->room_number}}">
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Contact Number</label>
                                        <input type="number" class="form-control" name="contact_number" value="{{$doctor_info->contact_number}}">
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Fee</label>
                                        <input type="number" class="form-control" name="fee" value="{{$doctor_info->doctor_fee}}">
                                   </div>
                              </div>

                         </div>
                         <div class="form-group">
                              <input type="submit" value="Update Doctor" class="btn btn-primary">
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection