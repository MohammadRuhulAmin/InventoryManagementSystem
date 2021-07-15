@extends('layouts.master')


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Create Vendor</li>
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
                <h3>Vendor Information</h3>
              <h5 class="card-title">Edit Vendor</h5>
              <br>
              <form role="form" action="{{route('vendors.update',$vendor->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Vendor  Name</label>
                    <input type="text" name="vendor_name" class="form-control" value="{{$vendor->vendor_name}}">
                    @if($errors->has('vendor_name'))
                        <span  class="text-danger">Vendor Name must be at least 2 charecters </span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="">Vendor Contact</label>
                    <input type="text" name="vendor_contact" class="form-control"  value="{{$vendor->vendor_contact}}">
                    @if($errors->has('vendor_contact'))
                        <span  class="text-danger">Insert a valid Vendor Contact Number </span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="">Vendor Email</label>
                    <input type="email" name="vendor_email" class="form-control"  value="{{$vendor->vendor_email}}">
                    @if($errors->has('vendor_email'))
                        <span  class="text-danger">Insert a valid Vendor Email </span>
                    @endif
                 </div>


                 <div class="form-group">
                    <label for="">Vendor Details / Address</label>
                    <textarea  name="vendor_address" class="form-control" >
                        {{$vendor->vendor_address}}
                    </textarea>
                    @if($errors->has('vendor_address'))
                        <span  class="text-danger">Vendor Details / Address  </span>
                    @endif
                 </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>Submit</button>
                </div>
              </form>
              
             
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

