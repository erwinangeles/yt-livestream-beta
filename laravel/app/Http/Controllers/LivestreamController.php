<?php

namespace App\Http\Controllers;

use App\Livestream;
use Illuminate\Http\Request;

class LivestreamController extends Controller
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
    return view('home');
}
public function play($slug)
{
//loads a specific course by direct url
    $livestream = Livestream::where('slug', '=', $slug)->firstOrFail();
    return view('view_livestream', compact('livestream'));
}

}
