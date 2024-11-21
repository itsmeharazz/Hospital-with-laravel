@extends('admin.layouts.template')
@section('page_title')

@endsection
@section('content')
<div class="row">
     <div class="col-md-12 mx-auto">
          <div class="card">
               <div class="card-header">
                    <div class="card-title">Add Department</div>
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
                    <form action="{{route('storeDeparment')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Deparment Name</label>
                                        <input type="text" name="Deparment_name" placeholder="Deparment Name"
                                             class="form-control">
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Deparment Short Description</label>
                                        <textarea name="Deparment_short_des" placeholder="Deparment Short Description" id="" class="form-control"></textarea>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Deparment Long Description</label>
                                        <textarea name="Deparment_long_des" placeholder="Deparment Long Description" id="" class="form-control"></textarea>
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
                              <input type="submit" value="Add Deparment" class="btn btn-primary">
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection