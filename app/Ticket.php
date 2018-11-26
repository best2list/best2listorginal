<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function hasUsername($id)
    {
        return User::find($id)->username;
    }
}
