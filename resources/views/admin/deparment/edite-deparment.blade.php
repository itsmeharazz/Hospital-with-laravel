@extends('admin.layouts.template')
@section('page_title')

@endsection
@section('content')
<div class="row">
     <div class="col-md-12 mx-auto">
          <div class="card">
               <div class="card-header">
                    <div class="card-title">update Department</div>
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
                    <form action="{{route('updateDeparment')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="deparment_id" value="{{$deparment_info->id}}">
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Deparment Name</label>
                                        <input type="text" name="Deparment_name" placeholder="Deparment Name"
                                             class="form-control" value='{{$deparment_info->deparment_name}}'>,<!--Deparment_name = Database table seel header name -->
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Deparment Short Description</label>
                                        <textarea name="Deparment_short_des"  id="" class="form-control"
                                          value=''
                                        >{{$deparment_info->shot_des}}</textarea>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Deparment Long Description</label>
                                        <textarea name="Deparment_long_des" id="" class="form-control"
                                        value=''
                                        >{{$deparment_info->long_des}}</textarea>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Deparment Image</label>
                                        <input type="file" class="form-control" name="Deparment_image" placeholder="Deparment Image">
                                   </div>
                              </div>
                         </div>
                         <div class="form-group">
                              <input type="submit" value="Update Deparment" class="btn btn-primary">
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection