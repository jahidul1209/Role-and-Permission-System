
@extends('layouts.app')

@section('content')

<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Entry</li>
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
                            <h3 class="card-title">Add User</h3>
                        </div>

   <form method="post" action="{{ route('area.store') }}" id="frmCheckout">
         @csrf

    <div class="card-body" style="font-family: Roboto">
    <div class="row">

        <div class="col-md-6">
            
            <div class="form-group">
                <label for="area_name">Area Name <span class="required-star"></span></label>
                <input id="area_name" type="text" class="form-control" name="area_name" value="" autofocus="">

            </div>
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
 @endsection