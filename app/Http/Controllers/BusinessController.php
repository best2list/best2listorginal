<?php

namespace App\Http\Controllers;

use App\Business;
use App\Category;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\crypto_box_publickey_from_secretkey;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $businesses = Business::all()->where('user_id',Auth::id());
        return view('business.index', compact('businesses'));
    }

    public function show($business_id)
    {
        $business = Business::find($business_id);
        return view('business.show', compact('business'));
    }

    public function create()
    {
        $categories = Category::all();
        $countries = Country::all();
        $businesses = Business::all()->where('user_id',Auth::id());
        return view('business.create', compact('categories','countries','businesses'));
    }

    public function store(Request $request)
    {
        $business = new Business;
        $business->user_id = Auth::user()->id;
        $business->title = $request->title;
        $business->summary = $request->summary;
        $business->description = $request->description;
        $business->email = $request->email;
        $business->zip_code = $request->zip_code;
        $business->phone = $request->fax;
        $business->website = $request->website;
        $business->address = $request->address;
        $business->fax = $request->fax;
        $business->status = 0;
        $business->city = $request->city;
        $business->location = $request->location;
        $business->type = $request->type;
        $business->country = $request->country;
        $business->parent_id = $request->parent_id;
        $business->save();
        $business->categories()->sync($request->categories);
        return redirect()->route('index');
    }

    public function edit($business_id)
    {
        $business = Business::find($business_id);
        $businesses = Business::all()->where('user_id',Auth::id());
        $categories = Category::all();
        $countries = Country::all();
        return view('business.edit', compact('business', 'businesses', 'categories','countries'));
    }

    public function update($business_id, Request $request)
    {
        $business = Business::find($business_id);
        $business->title = $request->title;
        $business->summary = $request->summary;
        $business->description = $request->description;
        $business->email = $request->email;
        $business->zip_code = $request->zip_code;
        $business->phone = $request->fax;
        $business->website = $request->website;
        $business->address = $request->address;
        $business->fax = $request->fax;
        $business->status = 0;
        $business->city = $request->city;
        $business->location = $request->location;
        $business->type = $request->type;
        $business->country = $request->country;
        $business->parent_id = $request->parent_id;
        $business->save();
        $business->categories()->sync($request->categories);
        return redirect()->route('index');
    }

    public function destroy($business_id)
    {
        $business = Business::find($business_id);
        $business->delete();
        return back();
    }

    public function businessStatus($business_id)
    {
        $business = Business::find($business_id);
        if($business->type == 'passive')
            $business->type='active';
        else
            $business->type='passive';
        $business->save();
        return redirect()->route('index');
    }
}
