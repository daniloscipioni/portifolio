<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function more()
    {
        return view('more.main');
    }


}
