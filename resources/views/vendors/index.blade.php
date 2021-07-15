@extends('layouts.master')


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Vendors</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Vendor</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
         

          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Vendors List</h5>
              <br>
                <br>
              <a href="{{route('vendors.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add Vendor</a>
              <br><br>
              <table class="table table-bordered datatable">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Vendor Name </th>
                        <th>Vendor Contact</th>
                        <th>Vendor Email</th>
                        <th>Vendor Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if($vendors)
                    @foreach($vendors as  $key=> $vendor)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$vendor->vendor_name ?? ''}}</td>
                        <td>{{$vendor->vendor_contact ?? ''}}</td>
                        <td>{{$vendor->vendor_email  ?? ''}}</td>
                        <td>{{$vendor->vendor_address ?? ''}}</td>
                       
                        <td>
                            <a href="{{route('vendors.edit',$vendor->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>Edit</a>
                            <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="vendor-delete-{{$vendor->id}}"><i class="fa fa-trash"></i>Delete</a>
                            <form id="vendor-delete-{{$vendor->id}}" action="{{route('vendors.destroy',$vendor->id)}}" method="post">
                              
                                @csrf 
                                @method('DELETE')


                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
              </table>
              
             
            </div>
          </div><!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
       
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
  



@endsection

