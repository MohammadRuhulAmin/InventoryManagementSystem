<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::orderby('created_at','DESC')->get();
        return view('vendors.index',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
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
            'vendor_name'=>'required',
            'vendor_email'=>'required',
            'vendor_contact'=>'required',
            'vendor_address'=>'required',
        ]);
        $vendors = new Vendor();
        $vendors->vendor_name = $request->vendor_name;
        $vendors->vendor_contact = $request->vendor_contact;
        $vendors->vendor_email = $request->vendor_email;
        $vendors->vendor_address = $request->vendor_address;
        $vendors->save();
        flash('New Vendor  is  Created Successfully!')->success();
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
        $vendor = Vendor::findOrFail($id);
        return view('vendors.edit',compact('vendor'));
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
            'vendor_name'=>'required',
            'vendor_email'=>'required',
            'vendor_contact'=>'required',
            'vendor_address'=>'required',
        ]);
        $vendors =  Vendor::findOrFail($id);
        $vendors->vendor_name = $request->vendor_name;
        $vendors->vendor_contact = $request->vendor_contact;
        $vendors->vendor_email = $request->vendor_email;
        $vendors->vendor_address = $request->vendor_address;
        $vendors->save();
        flash(' Vendor information  is  updated Successfully!')->success();
        return redirect()->route('vendors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        flash('The Vendor is Deleted Successfully')->success();
        return redirect()->route('vendors.index');
    }
}
