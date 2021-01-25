
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
                   
 <form method="post" action="{{ route('client_entry.store') }}" id="frmCheckout">
        
          	 @csrf
      <div class="card-body" style="font-family: Roboto">
        <div class="row">
           <div class="col-md-4">
             <div class="form-group row">
                <label for="client_name" style="width:30%">Client Name <span class="required-star"></span></label>
                <input id="client_name" type="text" class="form-control" name="client_name" value="" autofocus="" style="width: 70%">
             </div>
            </div>
        
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="organization" style="width:30%">Organization <span class="required-star"></span></label>
                <input id="organization" type="text" class="form-control" name="organization" value="" autofocus="" style="width: 70%">

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="address" style="width:30%">Address <span class="required-star"></span></label>
                <input id="address" type="text" class="form-control" name="address" value="" autofocus="" style="width: 70%">

            </div>
        </div>

    </div>

  @php
$Area = DB::table('areas')->get();
$softw = DB::table('softwares')->get();
@endphp
  
<input type="hidden" name="status" value="Pendding">
    <div class="row">
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="area" style="width:30%">Area <span class="required-star"></span></label>
               <select name="area" class="form-control" id="area" style="width: 60%;">
                   <option value="" selected="" disabled="">Select Area Name</option>
                                   @foreach( $Area as $row)
                                        <option value="{{$row->area_name}}">{{$row->area_name}}</option>
                                   @endforeach
                                  </select>
                                <div style="font-size: 14px; width: 10%;"><a href="{{route('area.create')}}" role="button" class="btn btn-info" style="padding: 4px 5px 0; margin: 2px"><i class="fas fa-plus"></i></a></div>
                            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="phone" style="width:30%">Mobile <span class="required-star"></span></label>
                <input id="phone" type="text" class="form-control" name="phone" value="" autofocus="" style="width: 70%">

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="requirement" style="width:30%"> Requirement <span class="required-star"></span></label>
                <select name="requirement" id="requirement" class="form-control" style="width: 60%">
                    <option value="" selected="" disabled="">Select Required Software</option>
                                   @foreach( $softw as $row1)
                                        <option value="{{$row1->soft_name}}">{{$row1->soft_name}}</option>
                                   @endforeach
                  </select>
                         <div style="font-size: 14px; width: 10%;"><a href="{{route('software.create')}}" role="button" class="btn btn-info" style="padding: 4px 5px 0; margin: 2px"><i class="fas fa-plus"></i></a></div>
                         </div>
        </div>

    </div>
    <input type="hidden" name="user_id" value="1">
    <div class="row">
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="level" style="width:30%">Level <span class="required-star"></span></label>
                <select name="level" class="form-control" id="level" style="width: 70%">
                    <option value="" selected="" disabled="">Select Level</option>
                    <option value="A"> Level A</option>
                    <option value="B"> Level B</option>
                    <option value="C"> Level C</option>
                </select>

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="office_phone" style="width:30%">Office Phone <span class="required-star"></span></label>
                <input id="office_phone" type="text" class="form-control" name="office_phone" value="" autofocus="" style="width: 70%">

            </div>
        </div>
        <div class="col-md-4">
            
            <div class="form-group row">
                <label for="comment" style="width:30%">Comment <span class="required-star"></span></label>
               <textarea id="comment" name="comment" class="form-control" style="width: 70%">
               </textarea>

            </div>
        </div>

    </div>

</div>
<div class="card-footer">

 <!--   <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 btn btn-info float-right">
                                Save
                            </button> -->
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


<section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="fa-pull-left">
                                    <h3 class="card-title" style="font-family: kalpurush">
                                        <i class="fas fa-list"></i> Client Information
                                    </h3>
                                </div>        
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            	            <div class="card">
<div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="list_length"><label>Show <select name="list_length" aria-controls="list" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="list_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="list"></label></div></div></div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Client Name</th>
                    <th>Org.Name</th>
                    <th>Area</th>
                    <th>Phone</th>
                     <th>Org.Mobile</th>
                    <th>Requirment</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

 @foreach ($data as $task)
                  <tr>
                  	 <td>{{ $task->id }}</td>
                    <td>{{ $task->client_name }}</td>
                    <td>{{ $task->organization }}</td>
                    <td>{{ $task->area }}</td>
                    <td>{{ $task->phone }}</td>
                    <td>{{ $task->office_phone }}</td>         
                    <td>{{ $task->requirement }}</td>
                     <td class="btn btn-sm btn-info">{{ $task->status }}</td>
                       <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('client_entry.show', $task->id) }}" class="btn btn-sm btn-info">Sold</a>
                                            <a href="{{ route('client_entry.edit', $task->id) }}" class="btn btn-sm btn-info">Edit</a>

                          <a href="{{ route('client_entry.destroy', $task->id) }}" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('delete-{{$task->id}}').submit();"> Delete </a>

                        <form id = 'delete-{{$task->id}}' action="{{ route('client_entry.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                          @method('DELETE')
                            @csrf
                        </form>
                                        </td>
                  </tr>
                 
                 @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>




</div>
</div>
 @endsection