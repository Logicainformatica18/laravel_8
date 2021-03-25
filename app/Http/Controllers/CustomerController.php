<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::orderBy('id','DESC')->get();
        return view("customer", compact("customer"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::orderBy('id','DESC')->get();
        return view("customertable", compact("customer"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->dni = $request->dni;
        $customer->ruc = $request->ruc;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->name = $request->name;
        $customer->cellphone = $request->cellphone;
        $customer->email = $request->email;
        $customer->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $customer=Customer::where("concat(firstname,' ',lastname,' ',name)","like",$show)->all();
        return view('customertable',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $customer = Customer::find($request->id);
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->dni = $request->dni;
        $customer->ruc = $request->ruc;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->name = $request->name;
        $customer->cellphone = $request->cellphone;
        $customer->email = $request->email;
        $customer->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Customer::find($request->id)->delete();
        return $this->create();
    }
}
