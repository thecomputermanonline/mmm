<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Threads extends Model
{
    //
    protected $fillable = ['title', 'body', 'slug'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
