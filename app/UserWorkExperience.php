<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserWorkExperience extends Model
{
    //

    public function user() {
        return $this->belongsTo(User::class);
    }

}
