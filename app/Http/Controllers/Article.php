<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function articles()
    {
        return view('articles');
    }

    public function articles_name()
    {
        return view('articles_name');
    }

    public function create()
    {
        return view('create');
    }

    public function articles_edit()
    {
        return view('articles_edit');
    }

}
