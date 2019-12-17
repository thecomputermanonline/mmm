<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        //dd(auth('api')->user());
        $articles = $this->getArticleMenu();

        return view('index', $articles);
    }

    public function marker_info()
    {
        return view('become-a-marker');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
