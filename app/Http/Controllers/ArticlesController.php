<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class ArticlesController extends Controller
{
    function index(){

        $articles = Articles::where('is_published','true')->get();


        if(!$articles){
            abort(404, 'sorry, we didnt get any');
        }

        return view('articles.index', compact('articles'));

    }

    function show($slug){


       // return view('articles.show', compact($articles));
        return view('articles.show',
            [
                'article'=> Articles::where('slug',$slug)->firstorfail()
        ]);
    }
}
