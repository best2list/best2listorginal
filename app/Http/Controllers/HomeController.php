<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Country;
use App\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::paginate(5);
        return view('home', compact('businesses'));
    }

    public function getCategory($id)
    {
        $businesses = Category::find($id)->businesses()->paginate(5);
        return view('category',compact('businesses'));
    }

    public function getCountry($id)
    {
        $businesses = Business::where('country',$id)->paginate(5);
        return view('country',compact('businesses'));
    }

    public function showBusiness($id)
    {
        $business = Business::find($id);
        return view('show', compact('business'));
    }

    public function addComment(Request $request, $id)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->business_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return back();
    }
}
