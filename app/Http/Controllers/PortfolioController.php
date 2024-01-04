<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function projects()
    {
        return view('page.project');
    }
    public function contact()
    {
        return view('page.contact');
    }
    public function skills()
    {
        return view('page.skill');
    }
}
