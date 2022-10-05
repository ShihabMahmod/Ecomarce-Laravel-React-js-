<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\order;

class orderController extends Controller
{
    public function confirmOrder(Request $req)
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
