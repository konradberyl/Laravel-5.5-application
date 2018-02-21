<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *
     * @return view
     */
    public function index()
    {
        return view('main/main');
    }
}