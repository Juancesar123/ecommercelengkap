<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neworder = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.id_customer')
        ->join('products', 'products.id', '=', 'orders.id_product')
        ->select('orders.*', 'products.product_name','users.name')
        ->whereNull('products.deleted_at')
        ->where('orders.status','=',1)
        ->count();
        $transaksiPembelians = DB::table('transaksi_pembelian')
        ->join('products', 'products.id', '=', 'transaksi_pembelian.product_id')
        ->select('transaksi_pembelian.*', 'products.product_name')
        ->whereNull('products.deleted_at')
        ->sum('transaksi_pembelian.amount');
        $userregister = DB::table('users')->count();
        return view('home',['neworder'=>$neworder,'userregister'=>$userregister,'transaksipembelian'=>$transaksiPembelians]);
    }
}
