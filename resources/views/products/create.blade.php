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
                    <label for="">Product Category</label>
                    <input type="text" name="product_category" class="form-control"  placeholder="Enter Product Category">
                   
                 </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Brand</label>
                    <input type="text" name="product_brand" class="form-control"  placeholder="Enter Product Brand">
                 </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Stock</label>
                    <input type="text" name="product_stock" class="form-control"  placeholder="Enter Product Stock">
                    @if($errors->has('product_stock'))
                        <span  class="text-danger">Product Stock must be a Number </span>
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
                    <input type="date" name="product_warenti_date" class="form-control" >
                   
                 </div>

                 <div class="jumbotron">
                     <h3 >Product Vendor Information</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Name of  Product </label>
                        <input type="text" name="vendor_name" class="form-control" placeholder="Enter the Vendor Name of Product" >
                       
                        @if($errors->has('vendor_name'))
                            <span  class="text-danger">Enter a Vendor Name</span>
                        @endif
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Contact Number </label>
                        <input type="text" name="vendor_name" class="form-control" placeholder="Enter the Vendor Contact Number" >
                       
                        @if($errors->has('vendor_name'))
                            <span  class="text-danger">Insert  Vendor Contact Number </span>
                        @endif
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Details </label>
                        <textarea name="product_details" class="form-control"></textarea>
                       
                        @if($errors->has('product_custom_id'))
                            <span  class="text-danger">details of the Vendor  </span>
                        @endif
                     </div>
                 </div>
                 <div class="jumbotron">
                    <h3>Product Service Location & Information</h3>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Product Use Location </label>
                        <input type="text" name="product_use_location" class="form-control" placeholder="Enter The location " >
                       
                        @if($errors->has('product_use_location'))
                            <span  class="text-danger">Product Use Location Details </span>
                        @endif
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Product Use Location Details </label>
                        <input type="text" name="product_use_location_details" class="form-control" placeholder="Enter The location  Details" >
                       
                        @if($errors->has('product_use_location'))
                            <span  class="text-danger">Product Use Location Details   </span>
                        @endif
                     </div>

                     <div class="form-group">
                        
                        <label for="exampleInputEmail1">Product Service Status </label>
                        <input type="text" name="product_service_status" class="form-control" placeholder="Product Service Status" >
                       
                        @if($errors->has('product_service_status'))
                            <span  class="text-danger">Product Service Status   </span>
                        @endif
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Product Review </label>
                        <textarea name="product_review" class="form-control"></textarea>
                       
                        @if($errors->has('product_review'))
                            <span  class="text-danger">Review of The Product  </span>
                        @endif
                     </div>




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
