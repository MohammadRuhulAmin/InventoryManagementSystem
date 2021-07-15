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
            <li class="breadcrumb-item active">Create Product</li>
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
                <h3>Product Information</h3>
              <h5 class="card-title">Create Product</h5>
              <br>
              <form role="form" action="{{route('products.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" class="form-control"  placeholder="Enter Product Name">
                    @if($errors->has('product_name'))
                        <span  class="text-danger">Product Name must be at least 2 charecters </span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="">Product Custom ID</label>
                    <input type="text" name="product_custom_id" class="form-control"  placeholder="Enter Product Custom ID">
                    @if($errors->has('product_custom_id'))
                        <span  class="text-danger">Product Name must be at least 2 charecters </span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="">Product Prize</label>
                    <input type="text" name="product_prize" class="form-control"  placeholder="Enter Product Prize">
                    @if($errors->has('product_prize'))
                        <span  class="text-danger">Product prize  must be grater than 0 taka </span>
                    @endif
                 </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Vendor </label>
                  <select name="vendor_name" class="browser-default custom-select">
                      @foreach ($vendorList as $vendor)
                        <option >{{$vendor->vendor_name}}</option>
                      @endforeach
                  </select>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Product Category</label>
                  <select name="product_category" class="browser-default custom-select">
                      @foreach ($categoryList as $category)
                        <option >{{$category->name}}</option>
                      @endforeach
                  </select>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Brand</label>
                    <select name="product_brand" class="browser-default custom-select">
                        @foreach ($brandsList as $brand)
                          <option >{{$brand->name}}</option>
                        @endforeach
                    </select>
                  </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Quantity</label>
                    <input type="text" name="product_quantity" class="form-control"  placeholder="Enter Product Quantity">
                    @if($errors->has('product_quantity'))
                        <span  class="text-danger">Product Quantity must be a Number </span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Details</label>
                    <textarea name="product_details" class="form-control"></textarea>
                   
                    @if($errors->has('product_custom_id'))
                        <span  class="text-danger">Product Details must be at least 2 charecters </span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Purchace Date</label>
                    <input type="date" name="product_purchace_date" class="form-control" >
                   
                    @if($errors->has('product_purchace_date'))
                        <span  class="text-danger">Insert a Valid  Purchace Date of that Product</span>
                    @endif
                 </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Warenty Date</label>
                    <input type="date" name="product_warenti_date" class="form-control" >
                   
                    @if($errors->has('product_warenti_date'))
                        <span  class="text-danger">Insert a Valid  Warenty Date of that Product</span>
                    @endif
                 </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Product Death Date</label>
                  <input type="date" name="product_death_date" class="form-control" >
                 
                  @if($errors->has('product_death_date'))
                      <span  class="text-danger">Insert a Valid  Death Date of that Product</span>
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



{{--  this is form body <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text">Upload</span>
      </div>
    </div>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
</div>
<!-- /.card-body --> --}}
