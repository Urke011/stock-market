<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    public function index()
    {
        return view('forum.index');
    }
    public function addPost()
    {
        return view('forum.create');
    }
}
