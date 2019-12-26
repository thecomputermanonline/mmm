<?php

namespace App\Http\Controllers;

use App\UserWorkExperience;
use Illuminate\Http\Request;

class UserWorkExperienceController extends Controller
{
    //

    public function store (Request $request)
    {
        if($request->work){

            $this->validate($request,[
                'company' => 'required|string',
                'jobtitle' => 'required|string',
                'startdate' => 'required|date',
                'enddate' => 'required|date',

            ]);
            $work = new UserWorkExperience();
            $work->user_id = Auth()->id();
            $work->company = $request->company;
            $work->jobtitle = $request->jobtitle;
            $work->startdate = $request->startdate;
            $work->enddate = $request->enddate;

            $work->save();
        }
        return ['message'=>'Work abroad goals saved!'];
    }

    public function getWorkExp()
    {
        $user_works = UserWorkExperience::where('user_id', Auth()->id())->get();
        return response()->json($user_works);

    }
}
