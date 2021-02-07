<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class image_product extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $productdata = DB::table('products')
        ->where('products.id','=',$id)
        ->first();
        $data = DB::table('image_product')
        ->join('products', 'products.id', '=', 'image_product.id_product')
        ->select('image_product.*', 'products.product_name')
        ->where('image_product.id_product','=',$id)
        ->paginate(5);
        return view('Imageproduct.index',['data'=> $data,'productdata'=>$productdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $productdata = DB::table('products')
        ->where('products.id','=',$id)
        ->first();
        return view('Imageproduct.create')->with('productdata',$productdata)->with('data',null);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'image' => 'required',
        ]);
        
        $file = $request->file('image')->store('product_images');
        DB::table('image_product')->insert([
            "id_product" => $request->id_product,
            "image" =>  $file,
        ]);
        return redirect()->route('imageproduct.data',[$request->id_product]);
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
    public function edit($id,$idproduct)
    {
        $productdata = DB::table('products')
        ->where('products.id','=',$idproduct)
        ->first();
        $data = DB::table('image_product')
        ->join('products', 'products.id', '=', 'image_product.id_product')
        ->select('image_product.*', 'products.product_name')
        ->where('image_product.id','=',$id)
        ->first();
        return view('Imageproduct.edit')->with('productdata',$productdata)->with('data',$data);
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
        $data = DB::table('image_product')
        ->where('image_product.id','=',$id)
        ->first();
        $foto = $request->file('image')->store('product_images');
        $exist = Storage::disk('local')->exists($data->image);
        if (isset($data->image) && $exist) {
            $delete = Storage::disk('local')->delete($data->image);
        }
        DB::table('image_product')
        ->where('id', $id)
        ->update([
            'image' => $foto,
        ]);
        return redirect()->route('imageproduct.data',[$request->id_product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('image_product')
        ->where('image_product.id','=',$id)
        ->first();
        $delete = Storage::disk('local')->delete($data->image);
        DB::table('image_product')->where('id', '=', $id)->delete();
        return redirect()->back();
    }
}
