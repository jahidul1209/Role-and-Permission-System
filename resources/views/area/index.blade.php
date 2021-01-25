
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
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="fa-pull-left">
                                    <h3 class="card-title" style="font-family: kalpurush">
                                        <i class="fas fa-list"></i> User Information
                                    </h3>
                                </div>
                                <div class="fa-pull-right">
                                    <a class="" href="{{route('area.create')}}">
                                        <button class="btn btn-info" style="font-family: kalpurush"><i class="fa fa-plus"></i><b> Add Area</b></button>
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
                    <th>SL</th>
                    <th> Area Name</th>

                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
     @foreach($data as $task )          
                  <tr>
                  	 <td>{{ $task->id }}</td>
                    <td>{{ $task->area_name }}</td>

                       <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                       	 <a href="{{ route('area.edit', $task->id) }}" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Edit </a>

                                <form class="inline-block" action="{{ route('area.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger btn-xs" value="Delete">
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










