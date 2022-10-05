<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\slider;

class sliderController extends Controller
{
    public function addSlide(Request $req)
    {
        $slide = new slider;

        $slide->title       = $req->input('title');
        $slide->slug        = $req->input('slug');
        $slide->description = $req->input('description');
        $slide->image       = $req->file('image')->store('products');
        $slide->status      = 0;

        $result = $slide->save();

    }
    public function sliderShow()
    {
        $slide = new slider;

        $result = $slide::all();
        return $result;
    }
    public function deleteSlide($id)
    {
        $slider = new slider;
        $result = $slider::where("id",$id)->delete();
        return $result;
    }
}
