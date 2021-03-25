<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouse = Warehouse::orderBy('id','DESC')->get();
        return view("warehouse", compact("warehouse"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warehouse = Warehouse::orderBy('id','DESC')->get();
        return view("warehousetable", compact("warehouse"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouse = new Warehouse();
        $warehouse->name = $request->name;
        $warehouse->description = $request->description;
        $warehouse->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $warehouse=Warehouse::where('description',"like",$show)->all();
        return view('warehousetable',compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $warehouse = Warehouse::find($request->id);
        return $warehouse;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $warehouse = Warehouse::find($request->id);
        $warehouse->name = $request->name;
        $warehouse->description = $request->description;
        $warehouse->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Warehouse::find($request->id)->delete();
        return $this->create();
    }
}
