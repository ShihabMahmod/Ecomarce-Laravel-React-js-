<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user\customar;

class coustomarController extends Controller
{
    public function userReg(Request $req)
    {
        $data = new customar;

        $data->user_name = $req->input('user_name');
        $data->email     = $req->input('email');
        $data->password  = Hash::make($req->input('password'));

        $data->save();
    }
    public function userLogin(Request $req)
    {
        $log    = new customar;
        $email  = $req->input('email');
        $result = $log::where("email",$email)->first();;
        if($result && Hash::check($req->password,$result->password))
        {
            return $result;
        }
        else{
            return "Not Foound Data";
        }
    }
}
