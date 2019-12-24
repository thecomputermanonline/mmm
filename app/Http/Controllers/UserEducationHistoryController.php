<?php

namespace App\Http\Controllers;

use App\UserEducationHistory;
use Illuminate\Http\Request;

class UserEducationHistoryController extends Controller
{
    //

    public function store (Request $request)
    {
        if($request->education){

            $this->validate($request,[
                'institution' => 'required|string',
                'level' => 'required|string',
                'grade' => 'required|integer',
                'course' => 'required|integer',

            ]);
            $education = new UserEducationHistory();
            $education->user_id = Auth()->id();
            $education->institution = $request->institution;
            $education->grade = $request->grade;
            $education->level = $request->level;
            $education->course = $request->course;

            $education->save();
        }
        return ['message'=>'Work abroad goals saved!'];
    }

    public function get_education()
    {

        $user_dependents = UserEducationHistory::where('user_id', Auth()->id())->get();


        return response()->json($user_dependents);

    }
}
