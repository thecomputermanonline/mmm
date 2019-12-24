<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Threads extends Model
{
    //

    public function user() {
        return $this->belongsTo(User::class);
    }
}
