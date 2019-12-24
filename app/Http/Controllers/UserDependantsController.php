<?php

namespace App\Http\Controllers;

use App\UserDependant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDependantsController extends Controller
{
    public function store (Request $request)
    {
       // if($request->dependant){

            $this->validate($request,[
                'name' => 'required|string',
                'relationship' => 'required|string',
                'age' => 'required|integer',

            ]
            );
        $dependant = new UserDependant;
            $dependant->user_id = bcrypt($request->sponsor);
            $dependant->name = bcrypt($request->name);
            $dependant->relationship = bcrypt($request->relationship);
            $dependant->age = bcrypt($request->age);
            $dependant->save();
       // }
        return ['message'=>'Your Dependants goals saved!'];
    }

    public function get_dependents()
    {

        $user_dependents = UserDependents::where('user_id', Auth()->id())->first();


        return response()->json($user_dependents);

    }
}
