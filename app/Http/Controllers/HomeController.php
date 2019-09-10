<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deportes =Paises::orderBy('id','DESC')->paginate(3);
        return view('home',compact('deportes'));
    }
}
