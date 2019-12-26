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
            $dependant->user_id = Auth()->id();
            $dependant->name = $request->name;
            $dependant->relationship = $request->relationship;
            $dependant->age = $request->age;
            $dependant->save();
       // }
        return ['message'=>'Your Dependants goals saved!'];
    }

    public function get_dependents()
    {

        $user_dependents = UserDependant::where('user_id', Auth()->id())->first();

//dd($user_dependents);
        return response()->json($user_dependents);

    }
}
