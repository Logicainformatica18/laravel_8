<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\Category;

use App\Models\Provider;
use App\Models\Warehouse;
use App\Models\Size;
use App\Models\Type;
use App\Models\Color;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('id','DESC')->get();
        $category = Category::orderBy('description','ASC')->get();
        $provider = Provider::orderBy('name','ASC')->get();
        $color = Color::orderBy('description','ASC')->get();
        $size = Size::orderBy('description','ASC')->get();
        $type = Type::orderBy('description','ASC')->get();
        return view("product", compact("product", "category",'provider','type','size','color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::orderBy('id','DESC')->get();
        return view("producttable", compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
try {
    $product = new Product;
    $product->description = $request->description;
    $product->code_box = $request->code_box;
    $product->detail = $request->detail;
    $product->providers_id = $request->providers_id;
    $product->colors_id = $request->colors_id;
    $product->types_id = $request->types_id;
    $product->categories_id = $request->categories_id;
    $product->sizes_id = $request->sizes_id;
    $product->price1 = $request->price1;
    $product->price2 = $request->price2;
    $product->price3 = $request->price3;
    $product->cost = $request->cost;
   $product->save();
    return $this->create();
} catch (\Exception $th) {
 return    $th->getMessage();
}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $product=Product::where('description',"like",$show)->all();
        return view('producttable',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->description = $request->description;
        $product->code_box = $request->code_box;
        $product->detail = $request->detail;
        $product->providers_id = $request->providers_id;
        $product->colors_id = $request->colors_id;
        $product->types_id = $request->types_id;
        $product->categories_id = $request->categories_id;
        $product->sizes_id = $request->sizes_id;
        $product->price1 = $request->price1;
        $product->price2 = $request->price2;
        $product->price3 = $request->price3;
        $product->cost = $request->cost;
        $product->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        return $this->create();
    }




    // public function category_productStore(Request $request){
    //     $category_product = new category_product();
    //     $category_product->category_id = $request->category_id;
    //     $category_product->product_id = $request->id;
    //     $category_product->save();
    //     $this->create();
    //    return  $this->category_productTable($request->id);
    // }
    // public function category_productDestroy(Request $request){
    //     category_product::find($request->id)->delete();
    //   return  $this->category_productTable($request->product_id);

    // }
    // public function category_productTable($product_id){
    //     $product = Product::find($product_id);
    //    return view("category_producttable", compact("product"));
    // }
    // public function category_productEdit(Request $request){

    //     $product = Product::find($request->id);
    //    return view("category_producttable", compact("product"));
    // }
}
