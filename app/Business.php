<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{

    public function categories()
    {
        return $this->belongsToMany(Category::class,'businesses_to_categories');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function hasCategory($id)
    {
        return in_array($id, $this->categories()->pluck('id')->toArray());
    }

    public function hasCountry($id)
    {
        return Country::find($id);
    }
}
