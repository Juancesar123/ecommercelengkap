<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use Auth;
use App\Detailuser;
use App\User;
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
        $data = DB::table('users')
        ->join('detailuser', 'detailuser.id', '=', 'users.profile_id')
        ->where('users.id',Auth::user()->id)
        ->select('users.*','detailuser.address','detailuser.city','detailuser.province','detailuser.first_name','detailuser.last_name','detailuser.phone_number')
        ->first();
        if(empty($data->profile_id)){
            $detailuser = new Detailuser();
            $detailuser->first_name = $request->first_name;
            $detailuser->last_name = $request->last_name;
            $detailuser->address = $request->address;
            $detailuser->city = $request->city;
            $detailuser->province = $request->province;
            $detailuser->phone_number = $request->phone_number;
            $detailuser->save();
            $user_id = Auth::user()->id;
            $user = User::find($user_id);
            $user->profile_id = $detailuser->id;
            $user->save();
            $order = new Order();
            $order->id_customer = Auth::user()->id;
            $order->qty = $request->qty;
            $order->amount = $request->ammount;
            $order->status = $request->status;
            $order->alamat_lengkap = $request->address;
            $order->city = $request->city;
            $order->province = $request->province;
            $order->nomor_telepon = $request->phone;
            $order->weight = $request->weight;
            $order->id_product = $request->id_product;
            $order->save();   
        }else{
            $order = new Order();
            $order->id_customer = Auth::user()->id;
            $order->qty = $request->qty;
            $order->amount = $request->ammount;
            $order->status = $request->status;
            $order->alamat_lengkap = $request->address;
            $order->city = $request->city;
            $order->province = $request->province;
            $order->nomor_telepon = $request->phone;
            $order->postcode = $request->postcode;
            $order->email = $request->email;
            $order->weight = $request->weight;
            $order->courier = $request->courier;
            $order->id_product = $request->id_product;
            $order->save();   
        }
        return redirect()->route('homepage');
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
