
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

   <form method="post" action="{{ route('users.update',$edit_user->id) }}" id="frmCheckout">
         @csrf
     @method('PUT')
    <div class="card-body" style="font-family: Roboto">
    <div class="row">

        <div class="col-md-6">
            
            <div class="form-group">
                <label for="name">Name <span class="required-star"></span></label>
                <input id="name" type="text" class="form-control" name="name" value="{{$edit_user->name}}" autofocus="">

            </div>
        </div>
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="username">User Name <span class="required-star"></span></label>
                <input id="username" type="text" class="form-control" name="username" value="{{$edit_user->username}}" autofocus="">

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="email">E-mail <span class="required-star"></span></label>
                <input id="email" type="email" class="form-control" name="email" value="{{$edit_user->email}}">

     
            </div>
        </div>
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="type"> User Type <span class="required-star"></span></label>
                <select class="form-control" name="type">
                    <option value="{{$edit_user->type}}" disabled="">{{$edit_user->type}}</option>
                     <option value="Admin">Admin</option>
                    <option value="User">User</option>
                    <option value="team_manager">Team Manager</option>
                                    </select>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            
            <div class="form-group">

                <label for="phone">Phone Number</label>

                <input id="phone" type="text" class="form-control" name="phone" value="{{$edit_user->phone}}"> 
            </div>
        </div>
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="team_name"> Team Name <span class="required-star"></span></label>

                <select class="form-control" name="team_name">
                    <option  value="{{$edit_user->team_name}}">{{$edit_user->team_name}}</option>
                                        <option value="A">Team A</option>
                    <option value="B">Team B</option>
                    <option value="C">Team C</option>
                    
                </select>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="password">Password <span class="required-star"></span></label>
                <input id="password" type="password" class="form-control" name="password" value="">
   
            </div>
        </div>
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="confirm_password">Confirm Password <span class="required-star"></span></label>
                <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="">
            </div>
        </div>

    </div>
 <div>
    <input type="hidden" name="status" value="Active">
    <button  type="button" id= "buttonOk" onclick="buttonChangeClick()" style="color:red">
         <label  id = "btn">{{$edit_user->status}}</label>
     </button>
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


<script type="text/javascript">
    function buttonChangeClick(){
        var okBtn = document.getElementById('btn');
        document.getElementById('buttonOk').style.color = "green";
        okBtn.innerText ="Active";

    }
</script>
 @endsection