<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neworder = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.id_customer')
        ->join('products', 'products.id', '=', 'orders.id_product')
        ->select('orders.*', 'products.product_name','users.name')
        ->where('orders.status','=',1)
        ->paginate(5);
        $processorder = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.id_customer')
        ->join('products', 'products.id', '=', 'orders.id_product')
        ->select('orders.*', 'products.product_name','users.name')
        ->where('orders.status','=',2)
        ->paginate(5);
        $shippingorder = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.id_customer')
        ->join('products', 'products.id', '=', 'orders.id_product')
        ->select('orders.*', 'products.product_name','users.name')
        ->where('orders.status','=',3)
        ->paginate(5);
        $finishorder = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.id_customer')
        ->join('products', 'products.id', '=', 'orders.id_product')
        ->select('orders.*', 'products.product_name','users.name')
        ->where('orders.status','=',4)
        ->paginate(5);
        return view('orders.index',['finishorder'=>$finishorder,'shippingorder'=> $shippingorder,'processorder'=> $processorder,'neworder' => $neworder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
