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
            $financial_plan = new UserFinancialPlan();
            $financial_plan->user_id = Auth()->id();
        }


        $financial_plan->sponsor = $request->sponsor;
        $financial_plan->budget = $request->budget;
        $financial_plan->save();
       // }
        return ['message'=>'Your financial  plan is  saved!'];

    }


    function get_finsup(){
        $query6 = UserFinancialPlan::query();
        $factors6 = clone $query6;

        $factors6 = $factors6->get();
        $allfactors6 = $factors6->count();

        $financialPlan = $query6->where('user_id', '=', auth()->id())->select('id', 'financial_support', 'budget')->get();
    }

    public function store_finsup(Request $request){

        $this->validate(request(),[
            'finsup' => 'required',
            'budget' => 'required',

        ]);
        $data = json_decode($request->getContent());

        $finsup = UserFinancialPlan::where('user_id', Auth()->id())->first();
        if(!$finsup){
            $finsup= new UserFinancialPlan();
        }
        $finsup->user_id = Auth()->id();
        $finsup->financial_support= $data->finsup;
        $finsup->budget= $data->budget;


        $finsup->save();

        return ['message'=>'Financial Plan saved!'];

    }
}
