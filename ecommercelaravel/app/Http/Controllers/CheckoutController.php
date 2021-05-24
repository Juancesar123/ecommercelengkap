<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class CheckoutController extends Controller
{
    public function index(){
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
        $user = DB::table('users')
        ->join('detailuser', 'detailuser.id','=','users.profile_id')
        ->where('users.id',Auth::user()->id)
        ->select('users.*','detailuser.first_name','detailuser.last_name','detailuser.address','detailuser.province','detailuser.city','detailuser.phone_number','detailuser.postcode')
        ->first(); 
        return view('checkout.index',['products'=> $products,'cart' => $cart,'purchases' => $purchases,'user' => $user]);
    }
}
