<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\catagory;

class catagoryController extends Controller
{
    public function addCatagory(Request $req)
    {
        $cat = new  catagory;

        $cat->catagory_name = $req->input('catagory_name');
        $cat->slug          = $req->input('slug');
        $cat->description   = $req->input('description');
        $cat->status        = 0;
        $cat->brand_logo    = $req->file('image')->store('products');

        $cat->save();
    }
    public function catagoryyList()
    {
        $cat = new catagory;

        $result = $cat::all();
        return $result;
    }
    public function deleteCatagor($id)
    {
        $cat = new catagory ;
        $result = $cat::where("id",$id)->delete();
        return $result;
    }
}
