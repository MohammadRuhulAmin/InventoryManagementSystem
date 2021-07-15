<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('created_at','DESC')->get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brand = Brand::orderby('created_at','DESC')->get();
        $category = Category::orderby('created_at','DESC')->get();
        $vendor = Vendor::orderby('created_at','DESC')->get();
        return view('products.create',['brandsList'=>$brand,'categoryList'=>$category,'vendorList'=>$vendor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $this->validate($request,[
            'product_custom_id'=>'required',
            'product_name'=>'required',
            'product_prize'=>'required',
            'product_category'=>'required',
            'product_brand'=>'required',
            'product_quantity'=>'required',
            'product_details'=>'required',
            'product_purchace_date'=>'required',
            'product_warenti_date'=>'required',
            'product_death_date'=>'required',
            'vendor_name'=>'required'

        ]);

        $product = new Product();
        $product->product_custom_id = $request->product_custom_id;
        $product->product_name = $request->product_name;
        $product->product_prize = $request->product_prize;
        $product->product_category = $request->product_category;
        $product->product_brand = $request->product_brand;
        $product->product_quantity = $request->product_quantity;
        $product->product_details = $request->product_details;
        $product->product_purchace_date = $request->product_purchace_date;
        $product->product_warenti_date = $request->product_warenti_date;
        $product->product_death_date = $request->product_death_date;
        $product->vendor_name = $request->vendor_name;
        $product->save();

        flash('New Product is Created Successfully!')->success();
        return back();



        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $product = Product::findOrFail($id);
        $brand = Brand::orderby('created_at','DESC')->get();
        $category = Category::orderby('created_at','DESC')->get();
        $vendor = Vendor::orderby('created_at','DESC')->get();
        return view('products.edit',
        ['brandsList'=>$brand,'categoryList'=>$category,'vendorList'=>$vendor,'product'=>$product]);
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'product_custom_id'=>'required',
            'product_name'=>'required',
            'product_prize'=>'required',
            'product_category'=>'required',
            'product_brand'=>'required',
            'product_quantity'=>'required',
            'product_details'=>'required',
            'product_purchace_date'=>'required',
            'product_warenti_date'=>'required',
            'product_death_date'=>'required',
            'vendor_name'=>'required'

        ]);

        $product =  Product::findOrFail($id);
        $product->product_custom_id = $request->product_custom_id;
        $product->product_name = $request->product_name;
        $product->product_prize = $request->product_prize;
        $product->product_category = $request->product_category;
        $product->product_brand = $request->product_brand;
        $product->product_quantity = $request->product_quantity;
        $product->product_details = $request->product_details;
        $product->product_purchace_date = $request->product_purchace_date;
        $product->product_warenti_date = $request->product_warenti_date;
        $product->product_death_date = $request->product_death_date;
        $product->vendor_name = $request->vendor_name;
        $product->save();

        flash('Product Information  is Updated Successfully!')->success();
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        flash('The Product is Deleted Successfully')->success();
        return redirect()->route('products.index');
    }
}
