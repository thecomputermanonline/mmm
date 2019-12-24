<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserEducationHistory extends Model
{
    protected $fillable = ['admission_offer', 'school', 'course', 'starting_date'];

    //

    public function user() {
        return $this->belongsTo(User::class);
    }
}
