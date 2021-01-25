
@extends('backend.layouts.partials.master')

@section('admin-content')
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">User Entry</li>
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
                                        <i class="fas fa-list"></i> User Information
                                    </h3>
                                </div>
                                <div class="fa-pull-right">
                                    <a class="" href="{{route('users.create')}}">
                                        <button class="btn btn-info" style="font-family: kalpurush"><i class="fa fa-plus"></i><b> Add User</b></button>
                                    </a>
                                </div>        
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                        <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >SL</th>
                    <th >Name</th>
                    <th>Email</th>
                     <th>Phone</th>
                    <th>Role</th>
					          <th >Action</th>
                  </tr>
                  </thead>
                  <tbody>
     @foreach($users as $task )          
                  <tr>
                  	 <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
					         <td >{{ $task->email }}</td>
                    <td >{{ $task->phone }}</td>
                   <td >
                    @foreach($task->roles as $per)
                     <span class="badge badge-info mr-1"> {{ $per->name }}</span>
                       @endforeach
                   </td>
                  
                       <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                       	 <a href="{{ route('users.edit', $task->id) }}" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Edit </a>

                       <a href="{{ route('users.destroy', $task->id) }}" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('delete-{{$task->id}}').submit();"> Delete </a>

                        <form id = 'delete-{{$task->id}}' action="{{ route('users.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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











