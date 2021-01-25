
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
                            <h3 class="card-title">Add Roles</h3>
                        </div>


   <form method="post" action="{{ route('roles.store') }}" id="frmCheckout">
         @csrf

    <div class="card-body" style="font-family: Roboto">
    <div class="row">

        <div class="col-md-8 offset-md-2">
            
            <div class="form-group">
                <label for="name">Role Name<span class="required-star"></span></label>
                <input id="name" type="text" class="form-control" name="name" value="" autofocus="">

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
 <div class="form-group">
   <label for="gridCheck">Permissions</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheckAll" value="1" > 
      <label class="form-check-label" for="gridCheckAll">All</label>
    </div>
  </div>
  <hr>


@php $i = 1; @endphp
@foreach ($permissions_group as $group)
    <div class="row">
        @php
          $permissions = App\Models\User::getpermissionsByGroupName($group->name);
              $j = 1;
        @endphp
        <div class="col-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)" >
                <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
            </div>
        </div>

        <div class="col-9 role-{{ $i }}-management-checkbox">

            @foreach ($permissions as $permission)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}" onclick = "checkOnClickBySingleGroup('role-{{ $i }}-management-checkbox','{{ $i }}Management',{{ count($permissions) }})" >
                    <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                </div>
                @php  $j++; @endphp
            @endforeach
            <br>
        </div>

    </div>
    @php  $i++; @endphp
@endforeach


        </div>

        </div>
        <div class="card-footer">
        <a href="">
            <button type="button" class="btn btn-danger">Close</button>
        </a>
        <button onclick="clientsubmit()" type="submit" class="btn btn-info float-right">Submit</button>
        </div>
      </form>
  </div>
</div>
</div>

  </div>
</section>

</div>
</div>

    @include('backend.pages.roles.script');

 @endsection

