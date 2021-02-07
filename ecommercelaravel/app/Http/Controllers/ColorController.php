<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
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
        $data = DB::table('color')
        ->join('products', 'products.id', '=', 'color.id_product')
        ->select('color.*', 'products.product_name')
        ->where('color.id_product','=',$id)
        ->paginate(5);
        return view('color.index',['data'=> $data,'productdata'=>$productdata]);
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
        return view('color.create')->with('productdata',$productdata);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('color')->insert([
            "id_product" => $request->id_product,
            "color" => $request->color
        ]);
        return redirect()->route('color.data',[$request->id_product]);
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
        $data = DB::table('color')
        ->join('products', 'products.id', '=', 'color.id_product')
        ->select('color.*', 'products.product_name')
        ->where('color.id','=',$id)
        ->first();
        return view('color.edit')->with('productdata',$productdata)->with('data',$data);
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
        DB::table('color')
        ->where('id', $id)
        ->update([
            'color' => $request->color,
        ]);
        return redirect()->route('color.data',[$request->id_product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('color')->where('id', '=', $id)->delete();
        return redirect()->back();
    }
}
