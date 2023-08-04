<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shippingController extends Controller
{
    public function shipping_info(Request $req)
    {
        $order = new order;


        $order->user_id    = $req->user_id;
        $order->first_name = $req->first_name;
        $order->last_name  = $req->last_name;
        $order->email      = $req->email;
        $order->address1   = $req->address1;
        $order->address2   = $req->address2;
        $order->zip        = $req->zip;
        $order->distric    = $req->distric;
        $order->phone      = $req->phone;

        $order->save();
    }

    public function allOrder()
    {
        $order = new order;
        $result = $order::all();
        return $result;
    }
}
