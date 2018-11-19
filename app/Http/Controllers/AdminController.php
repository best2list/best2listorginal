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
        return view('admin.dashboard');
    }

    public function category()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
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

    public function categoryDestroy($category_id)
    {
        $category = Category::find($category_id);
        $category->delete();
        return back();
    }

    public function country()
    {
        $countries = Country::all();
        return view('admin.country', compact('countries'));
    }

    public function storeCountry(Request $request)
    {
        $country = new Country();
        if($request->file('flag')) {
            $flag = $request->file('flag');
            $newName =date('Y_m_d_H_i_s').'_'.$request->country.".".$flag->getClientOriginalExtension();
            $newpath = 'images/country/';
            $flag->move($newpath, $newName);

            $country->country = $request->country;
            $country->flag = $newpath.$newName;
            $country->save();
        }
        else{
            return $request->file('flag');
        }
        return back();
    }

    public function countryDestroy($country_id)
    {
        $country = Country::find($country_id);
        $country->delete();
        return back();
    }

    public function comment()
    {
        $comments = Comment::all();
        return view('admin.comment', compact('comments'));
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

    public function commentDestroy($comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->delete();
        return back();
    }
}
