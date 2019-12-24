<?php

namespace App\Http\Controllers;

use App\UserBackgroundInfo;
use Illuminate\Http\Request;

class UserBackgroundInfoController extends Controller
{
    //

    public function store (Request $request)
    {
        if($request->work){

            $this->validate($request,[
                'institution' => 'required|string',
                'level' => 'required|string',
                'grade' => 'required|integer',
                'course' => 'required|integer',

            ]);
            $work = new UserBackgroundInfo();
            $work->user_id = Auth()->id();
            $work->company = $request->company;
            $work->job_title = $request->job_title;
            $work->job_level = $request->job_level;
            $work->location = $request->location;

            $work->save();
        }
        return ['message'=>'Work abroad goals saved!'];
    }

    public function get_education()
    {
        $user_info = UserBackgroundInfo()::where('user_id', Auth()->id())->first();
        return response()->json($user_info);

    }
}
