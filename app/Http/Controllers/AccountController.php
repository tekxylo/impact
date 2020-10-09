<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Auth;

class AccountController extends Controller
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
        return view('impact/account/settings');
    }

    public function vehicles()
    {
        $vehicles = Vehicle::where('oid', Auth::user()->id)->get()->all();
        $vehicle_count = Vehicle::where('oid', Auth::user()->id)->count();
        return view('impact/account/vehicles')->with([
            'vehicles' => $vehicles,
            'vehicle_count' => $vehicle_count
        ]);
    }
}
