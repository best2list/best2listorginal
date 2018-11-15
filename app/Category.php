<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function businesses()
    {
        return $this->belongsToMany(Business::class,'businesses_to_categories');
    }

}
