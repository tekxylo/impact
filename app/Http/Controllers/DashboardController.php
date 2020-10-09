<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ride;
use Auth;

class DashboardController extends Controller
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
        $rides = Ride::where('oid', Auth::user()->id)->get()->all();
        $ride_count = Ride::where('oid', Auth::user()->id)->count();
        return view('impact/dashboard/home')->with(['rides' => $rides,'ride_count' => $ride_count]);
    }
}
