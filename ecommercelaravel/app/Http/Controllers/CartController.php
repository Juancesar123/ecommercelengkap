<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart(){
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
        return view('cart.index',[
            'cart' => $cart,
            'purchases' => $purchases
        ]);
    }
    public function addcart($id,Request $request){
        $totalharga = (int)$request->qty * (int)$request->price;
        //echo (int)$request->price;
        $cart = new Cart();
        $cart->id_product = $id;
        $cart->qty = $request->qty;
        $cart->total_harga = $totalharga;
        $cart->id_color = $request->color;
        $cart->id_size = $request->size;
        $cart->sessionid = session()->getId();
        $cart->save();
        return redirect('/');
    }
    public function deleteCart($id){
        Cart::findOrFail($id)->delete();
        return redirect('/');
    }
}
