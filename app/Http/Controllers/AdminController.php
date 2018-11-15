<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use App\Country;

class AdminController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $categories = Category::all();
        $comments = Comment::all();
        return view('admin.dashboard',compact('countries', 'categories', 'comments'));
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
            $request->flag->move('uploads/img.png');

            $country->country = $request->country;
            $country->flag = 'uploads/' . $filename;
            $country->save();
        }
        return $request->flag;
    }

    public function commentStatus($comment_id)
    {
        $comment = Comment::find($comment_id);
        if($comment->status == "passive")
            $comment->status = "active";
        else
            $comment->status = "passive";
        $comment->save();
        return back();
    }
}
