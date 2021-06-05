<?php

namespace App\Http\Controllers;

use App\Models\Sensor;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sensor = Sensor::where('id', 1)->first();
        $sensor = $sensor->temperature;
        return view('dashboard', compact('sensor'));
    }
}
