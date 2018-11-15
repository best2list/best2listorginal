<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Country;

class AdminController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $categories = Category::all();
        return view('admin.dashboard',compact('countries'),compact('categories'));
    }


    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        if($request->parent_id)
            $category->parent_id = $request->parent_id;
        $category->save();
        return back();
    }

    public function storeCountry(Request $request)
    {
        $country = new Country();
        if($request->flag) {
            $file = $request->flag;
            //$extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $file;
            $file->move('uploads/', $filename);

            $country->country = $request->country;
            $country->flag = 'uploads/' . $filename;
            $country->save();
        }
        return $extension;
    }
}
