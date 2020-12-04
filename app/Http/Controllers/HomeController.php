<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TermCondition;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $terms = TermCondition::orderBy('id', 'desc')->limit(1)->get();
        return view('home', [
            'terms' => $terms
        ]);
    }
}
