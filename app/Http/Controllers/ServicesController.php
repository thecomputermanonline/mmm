<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
class ServicesController extends Controller
{
    function index(){

        $articles = Services::where('is_published','true')->get();


        if(!$articles){
            abort(404, 'sorry, we didnt get any');
        }

        return view('services.index', compact('services'));

    }

    function show($slug){


       // return view('articles.show', compact($articles));
        return view('services.show',
            [
                'services'=> Services::where('slug',$slug)->firstorfail()
        ]);
    }
}
