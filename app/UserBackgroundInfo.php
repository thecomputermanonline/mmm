<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBackgroundInfo extends Model
{
    //
    protected $fillable = ['title', 'body', 'slug'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
