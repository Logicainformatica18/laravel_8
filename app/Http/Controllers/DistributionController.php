<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Warehouse;
class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distribution = Distribution::orderBy('id','DESC')->get();
        $product = Product::all();
        $warehouse = Warehouse::orderBy('description','ASC')->get();
        return view("distribution", compact("distribution",'product','warehouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distribution = Distribution::orderBy('id','DESC')->get();
        return view("distributiontable", compact("distribution"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $distribution = new Distribution();
        $distribution->products_id = substr($request->products_id,strpos($request->products_id,"-")+1,100);
        $distribution->warehouses_id = $request->warehouses_id;
        try {
            if ($request->state=="input") {
                $distribution->state = "Ingreso";
                $distribution->quantity = $request->quantity;
            }
            elseif($request->state=="output"){
                $distribution->state = "Salida";
                $distribution->quantity =  $request->quantity * -1;
            }

            $distribution->save();
        } catch (\Exception $th) {
            //return $th->getMessage();
        }

        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $show="%".$request["show"]."%";
        // $distribution=Product::where('description',"like",$show)->all();
        // return view('dis$distributiontable',compact('dis$distribution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $distribution = Distribution::find($request->id);
        $product_id=$distribution["products_id"];
        $product = Product::find($product_id);
        $distribution->products_id=$product["description"];
        return $distribution;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $distribution = Distribution::find($request->id);
        $distribution->products_id = substr($request->products_id,strpos($request->products_id,"-")+1,100);
        $distribution->warehouses_id = $request->warehouses_id;
        $distribution->quantity = $request->quantity;
        $distribution->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Distribution::find($request->id)->delete();
        return $this->create();
    }
    // public function autocomplete(Request $request){
    //     $show="%".$request["show"]."%";
    //     $distribution=Product::where('description',"like",$show)->all();
    //     return $distribution;
    // }
}
