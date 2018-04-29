<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Customer;

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
        $as = Reservation::all()->sortByDesc('id');
        $bau = Customer::all()->sortByDesc('id');
        return view('home')->with('res',$as)->with('bau',$bau);
    }
}
