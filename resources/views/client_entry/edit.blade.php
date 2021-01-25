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
                       <h3 class="card-title">Client Entry</h3>
                    </div>
                   
 <form method="post" action="{{ route('client_entry.update',$edit_emp->id) }}" id="frmCheckout">
        
          	 @csrf
              @method('PUT')
      <div class="card-body" style="font-family: Roboto">
        <div class="row">
           <div class="col-md-4">
             <div class="form-group row">
                <label for="client_name" style="width:30%">Client Name <span class="required-star"></span></label>
                <input id="client_name" type="text" class="form-control" name="client_name"  autofocus="" value="{{$edit_emp->client_name}}" style="width: 70%">
             </div>
            </div>
       <!--  <input type="hidden" name="client_id" value="" id="client_id"> -->
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="organization" style="width:30%">Organization <span class="required-star"></span></label>
                <input id="organization" type="text" class="form-control" name="organization" value="{{$edit_emp->organization}}" autofocus="" style="width: 70%">

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="address" style="width:30%">Address <span class="required-star"></span></label>
                <input id="address" type="text" class="form-control" name="address" value="{{$edit_emp->address}}" autofocus="" style="width: 70%">

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="area" style="width:30%">Area <span class="required-star"></span></label>
               <select name="area" class="form-control" id="area" style="width: 60%;">
                   <option value="{{$edit_emp->area}}" selected="" disabled="">{{$edit_emp->area}}</option>
                                      <option value="Dhaka">Dhaka</option>
                                  </select>
                                <div style="font-size: 14px; width: 10%;"><a href="http://marketing.bigsoftwareltd.com/area" role="button" class="btn btn-info" style="padding: 4px 5px 0; margin: 2px"><i class="fas fa-plus"></i></a></div>
                            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="phone" style="width:30%">Mobile <span class="required-star"></span></label>
                <input id="phone" type="text" class="form-control" name="phone" value="{{$edit_emp->phone}}" autofocus="" style="width: 70%">

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="requirement" style="width:30%"> Requirement <span class="required-star"></span></label>
                <select name="requirement" id="requirement" class="form-control" style="width: 60%">
                    <option value="{{$edit_emp->requirement}}" selected="" disabled="">Select Required Software</option>
                                 <option value="Pos  New Software">Pos  New Software</option>
                                 <option value="Express Retail Service">Express Retail Service</option>
                  </select>
                         <div style="font-size: 14px; width: 10%;"><a href="" role="button" class="btn btn-info" style="padding: 4px 5px 0; margin: 2px"><i class="fas fa-plus"></i></a></div>
                         </div>
        </div>

    </div>
   <!--  <input type="hidden" name="user_id" value="1"> -->
    <div class="row">
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="level" style="width:30%">Level <span class="required-star"></span></label>
                <select name="level" class="form-control" id="level" style="width: 70%">
                    <option value="{{$edit_emp->level}}" selected="" disabled="">{{$edit_emp->level}}</option>
                    <option value="A"> Level A</option>
                    <option value="B"> Level B</option>
                    <option value="C"> Level C</option>
                </select>

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="office_phone" style="width:30%">Office Phone <span class="required-star"></span></label>
                <input id="office_phone" type="text" class="form-control" name="office_phone" value="{{$edit_emp->office_phone}}" autofocus="" style="width: 70%">

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="comment" style="width:30%">Comment <span class="required-star"></span></label>
               <textarea id="comment" name="comment"  value="{{$edit_emp->comment}}" class="form-control" style="width: 70%">{{$edit_emp->comment}}
               </textarea>

            </div>
        </div>

    </div>

  </div>
 <button  type="submit" class="btn btn-info float-right" style="padding: 5px">Save</button>
</form></div></div></div></div></section></div></div>
   @endsection