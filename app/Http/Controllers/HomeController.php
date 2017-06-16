<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
		Storage::disk('local')->put('file.txt', '/home/developer/SVN/startup/file.txt');
		$sample_array = ['a','b','c','d'];
        return view('home',['sample'=>$sample_array]);
    }
}
