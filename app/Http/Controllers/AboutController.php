<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about.home');
    }

    public function projects()
    {
        return view('about.projects');
    }

    public function contacts()
    {
        return view('about.contacts');
    }

}
