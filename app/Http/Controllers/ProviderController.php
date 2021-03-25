<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provider = Provider::orderBy('id','DESC')->get();
        return view("provider", compact("provider"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider = Provider::orderBy('id','DESC')->get();
        return view("providertable", compact("provider"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->name = $request->name;
        $provider->description = $request->description;
        $provider->cellphone = $request->cellphone;
        $provider->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $provider=Provider::where('name',"like",$show)->all();
        return view('providertable',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $provider = Provider::find($request->id);
        return $provider;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $provider = Provider::find($request->id);

        $provider->name = $request->name;
        $provider->description = $request->description;
        $provider->cellphone = $request->cellphone;
        $provider->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Provider::find($request->id)->delete();
        return $this->create();
    }
}
