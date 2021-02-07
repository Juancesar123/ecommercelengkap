<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SizestokController extends Controller
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
        $data = DB::table('size_stok')
        ->join('products', 'products.id', '=', 'size_stok.id_product')
        ->select('size_stok.*', 'products.product_name')
        ->where('size_stok.id_product','=',$id)
        ->paginate(5);
        return view('Sizestok.index',['data'=> $data,'productdata'=>$productdata]);
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
        return view('Sizestok.create')->with('productdata',$productdata);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('size_stok')->insert([
            "id_product" => $request->id_product,
            "size" => $request->size,
            "stok" => $request->stok
        ]);
        return redirect()->route('sizestok.data',[$request->id_product]);
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
        $data = DB::table('size_stok')
        ->join('products', 'products.id', '=', 'size_stok.id_product')
        ->select('size_stok.*', 'products.product_name')
        ->where('size_stok.id','=',$id)
        ->first();
        return view('Sizestok.edit')->with('productdata',$productdata)->with('data',$data);
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
        DB::table('size_stok')
        ->where('id', $id)
        ->update([
            'size' => $request->size,
            'stok' => $request->stok
        ]);
        return redirect()->route('sizestok.data',[$request->id_product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('size_stok')->where('id', '=', $id)->delete();
        return redirect()->back();
    }
}
