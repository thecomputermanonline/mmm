<?php

namespace App\Http\Controllers;

use App\UserFinancialPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFinancialPlanController extends Controller
{


    public function store (Request $request)
    {


       // if($request->sponsor){



            $this->validate($request,[
                'sponsor' => 'required|string',
                'budget' => 'required|integer',

            ]);

        $financial_plan = UserFinancialPlan::where('user_id', Auth()->id())->first();

        if(!$financial_plan){
            $financial_plan = UserFinancialPlan::class;
        }


        $financial_plan->sponsor = $request->sponsor;
        $financial_plan->budget = $request->budget;
        $financial_plan->save();
       // }
        return ['message'=>'Your financial  plan is  saved!'];

    }

}
