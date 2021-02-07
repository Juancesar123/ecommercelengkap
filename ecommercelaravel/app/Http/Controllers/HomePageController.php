<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomePageController extends Controller
{
    public function index(Request $request){
        $purchases = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.id_product')
        ->select('carts.*','products.product_name','products.price','products.poto')
        ->where('sessionid',session()->getId())
        ->sum('carts.total_harga');
        $cart = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.id_product')
        ->select('carts.*','products.product_name','products.price','products.poto')
        ->where('sessionid',session()->getId())
        ->get();
        $products = DB::table('products')
        ->join('mereks', 'mereks.id', '=', 'products.brand')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'mereks.name','categories.category_name')
        ->whereNull('products.deleted_at')
        ->paginate(10);
         return view('homepage.index',['products'=> $products,'cart' => $cart,'purchases' => $purchases]);
        //dd($cart);
    }
}
