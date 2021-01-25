
@extends('backend.layouts.partials.master')

@section('admin-content')


<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Role Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Add Roles</a></li>
              <li class="breadcrumb-item active">Add Role Entry</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <div class="row">
           <div class="col-12">
               <div class="card card-info" style="font-family: Roboto">
                  <div class="card-header">
                       <h3 class="card-title">User Information</h3>
                    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success">
        <div>
                <p>{{ Session::get('success') }}</p>
        </div>
    </div>
@endif               
 <form method="post" action="{{ route('users.store') }}" id="frmCheckout">
        
             @csrf
      <div class="card-body" style="font-family: Roboto">
        <div class="row">
           <div class="col-md-5">
             <div class="form-group row">
                <label for="name" style="width:20%">User Name <span class="required-star"></span></label>
                <input id="name" type="text" class="form-control" name="name" value="" autofocus="" style="width: 70%">
             </div>
            </div><div class="col-md-1"></div>
            <div class="col-md-5">
             <div class="form-group row">
                <label for="email" style="width:20%">Email <span class="required-star"></span></label>
                <input id="email" type="email" class="form-control" name="email" value="" autofocus="" style="width: 70%">
             </div>
            </div>
      </div>
        <div class="row">
           <div class="col-md-5">
             <div class="form-group row">
             <label for="area" style="width:20%">Role</label>
               <select name="role" class="form-control select2" multiple id="role" style="width: 70%;">
                   @foreach( $role as $row)
                       <option value="{{$row->name}}">{{$row->name}}</option>
                     @endforeach
                 </select>
             </div>
            </div>
            <div class="col-md-1"></div>
          <div class="col-md-5">
             <div class="form-group row">
                <label for="phone" style="width:20%">Phone <span class="required-star"></span></label>
                <input id="phone" type="text" class="form-control" name="phone" value="" autofocus="" style="width: 70%">
             </div>
            </div>

      </div>
       <div class="row">

          <div class="col-md-5">
             <div class="form-group row">
                <label for="password" style="width:20%">Password <span class="required-star"></span></label>
                <input id="password" type="password" class="form-control" name="password" value="" autofocus="" style="width: 70%">
             </div>
            </div> <div class="col-md-1"></div>
         <div class="col-md-5">
            
            <div class="form-group row">
                <label for="confirm_password" style="width:20%">Confirm Password <span class="required-star"></span></label>
                <input id="confirm_password" type="password" class="form-control" name="confirm_password" style="width: 70%" value="">
            </div>
        </div>




      </div>
   </div>


<div class="card-footer">

    <button  type="submit" class="btn btn-info float-right" style="padding: 5px">Save</button>
    <a class="float-right" onclick="addclient()">
        <button class="btn btn-info" style="padding: 5px; margin-right: 3px"><i class="fa fa-plus"></i><b> New</b></button>
    </a>
</div>
</form>
</div>
 </div>
</div>
</div>
</section>

</div>
</div>

 @endsection

