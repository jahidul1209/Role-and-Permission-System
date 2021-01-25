
@extends('backend.layouts.partials.master')

@section('admin-content')
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Role Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Role</a></li>
              <li class="breadcrumb-item active">Role Entry</li>
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
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="fa-pull-left">
                                    <h3 class="card-title" style="font-family: kalpurush">
                                        <i class="fas fa-list"></i> Role Information
                                    </h3>
                                </div>
                                <div class="fa-pull-right">
                                    <a class="" href="{{route('roles.create')}}">
                                        <button class="btn btn-info" style="font-family: kalpurush"><i class="fa fa-plus"></i><b> Add Role</b></button>
                                    </a>
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
                    <th width="5%">SL</th>
                    <th width="10%">Role Name</th>
                    <th width="70%">Permissions</th>
					<th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
     @foreach($roles as $task )          
                  <tr>
                  	 <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
					<td >
                  	 @foreach($task->permissions as $permission)
                  	 <span class="badge badge-info mr-1"> {{ $permission->name }}</span>
                  	
                  	 @endforeach
                  	 </td>
                       <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                       	 <a href="{{ route('roles.edit', $task->id) }}" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Edit </a>

                       <a href="{{ route('roles.destroy', $task->id) }}" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('delete-{{$task->id}}').submit();"> Delete </a>

                        <form id = 'delete-{{$task->id}}' action="{{ route('roles.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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











