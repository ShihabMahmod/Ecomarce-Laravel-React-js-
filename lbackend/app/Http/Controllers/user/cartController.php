<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\cart;

class cartController extends Controller
{
    public function addCart(Request $req)
    {
        $cart = new cart;
        
        $cart->user_id    = $req->user_id;
        $cart->product_id = $req->product_id;
        $cart->name       = $req->name;
        $cart->price      = $req->price;
        $cart->warenty    = $req->warenty;
        $cart->image      = $req->image;
        $cart->quantity   = $req->quantity;

        $cart->save();


    }
    public function addToCart($id,Request $req)
    {
        $cart = new cart;
        
        $cart->user_id    = $req->user_id;
        $cart->product_id = $id;
        $cart->name       = $req->name;
        $cart->price      = $req->price;
        $cart->warenty    = $req->warenty;
        $cart->image      = $req->image;
        $cart->quantity   = $req->quantity;

        $cart->save();


    }
    public function showCart($user_id)
    {
        $cart = new cart;
        $result = $cart::where("user_id",$user_id)->get()->all();
        return $result;
    }

    public function deleteCart($id)
    {
        $cart =new cart;
        $result = $cart::where("id",$id)->delete();
        return $result;
    }
    public function deleteAllCart($user_id)
    {
        $cart =new cart;
        $result = $cart::where("user_id",$user_id)->delete();
        return $result;

    }
}
