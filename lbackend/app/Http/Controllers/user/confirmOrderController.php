<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\confirm_order;

class confirmOrderController extends Controller
{
    public function confirmOrdeDetails(Request $req)
    {
        $order = new confirm_order;


        $order->user_id    = $req->user_id;
        $order->product_id = $req->product_id;
        $order->name       = $req->name;
        $order->price      = $req->price;
        $order->quantity   = $req->quantity;
        $order->image      = $req->image;

        $order->save();
    }
    public function orderdProductDetails($user_id)
    {
        $order = new confirm_order;

        $result = $order::where("user_id",$user_id)->get()->all();
        return $result;
    }
}
