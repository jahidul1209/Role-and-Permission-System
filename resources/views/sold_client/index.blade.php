
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
     @foreach($appr as $approve )               
                  <tr>
                  	 <td>{{ $approve->id }}</td>
                    <td>{{ $approve->client_name }}</td>
                    <td>{{ $approve->organization }}</td>
                    <td>{{ $approve->area }}</td>
                    <td>{{ $approve->phone }}</td>
                    <td>{{ $approve->office_phone }}</td>         
                    <td>{{ $approve->requirement }}</td>
                     <td class="btn btn-sm btn-info">{{ $approve->status }}</td>
                       <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <form class="inline-block" action="{{ route('client_entry.destroy', $approve->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
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