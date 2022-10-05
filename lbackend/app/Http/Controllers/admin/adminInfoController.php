<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\admin\admin_info_tbl;

class adminInfoController extends Controller
{
    public function adminReg(Request $req)
    {
        $info = new admin_info_tbl;

        $info->first_name = $req->input('first_name');
        $info->last_name  = $req->input('last_name');
        $info->email      = $req->input('email');
        $info->phone      = $req->input('phone');
        $info->password   = Hash::make($req->input('password'));
        $info->image      = $req->file('image')->store('products');
        $info->status     = 0;
        $result = $info->save();
        return $result;
    }
    public function login(Request $req)
    {
        $data = new admin_info_tbl;

        $email  = $req->email;
        $result = $data::where("email",$email)->first();

        if($result && Hash::check($req->password,$result->password))
        {
            return $result;
        }
        else{
            return "faild";
        }
    }
}
