<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rute;
use App\Customer;
use App\Reservation;
use Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $as = Reservation::all()->sortByDesc('id');
        return view('res.index')->with('res',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $as = Rute::all();
      $sa = Customer::all();
      $tu = User::all();
      return view('res.create')->with('rute',$as)->with('cus',$sa)->with('user',$tu);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'reservation_code' => 'required',
        'reservation_at' => 'required',
        'reservation_date' => 'required',
        'customerid' => 'required',
        'userid' => 'required',
        'ruteid' => 'required',
        'depart_at' => 'required',
        'seat_code' => 'required',
        'price' => 'required',
      ]);

      $ru = new Reservation();
      $ru->reservation_code = $request->reservation_code;
      $ru->reservation_at = $request->reservation_at;
      $ru->reservation_date = $request->reservation_date;
      $ru->customerid = $request->customerid;
      $ru->userid = $request->userid;
      $ru->ruteid = $request->ruteid;
      $ru->depart_at = $request->depart_at;
      $ru->seat_code = $request->seat_code;
      $ru->price = $request->price;
      $ru->save();

      return redirect('reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Reservation::find($id);
      return view('res.view')->with('vation',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ru = Reservation::find($id);
        $as = Rute::all();
        $sa = Customer::all();
        $tu = User::all();
        return view('res.edit')->with('res',$ru)->with('rute',$as)->with('cus',$sa)->with('user',$tu);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'reservation_code' => 'required',
        'reservation_at' => 'required',
        'reservation_date' => 'required',
        'customerid' => 'required',
        'userid' => 'required',
        'ruteid' => 'required',
        'depart_at' => 'required',
        'seat_code' => 'required',
        'price' => 'required',
      ]);

      $ru = Reservation::find($id);
      $ru->reservation_code = $request->reservation_code;
      $ru->reservation_at = $request->reservation_at;
      $ru->reservation_date = $request->reservation_date;
      $ru->customerid = $request->customerid;
      $ru->userid = $request->userid;
      $ru->ruteid = $request->ruteid;
      $ru->depart_at = $request->depart_at;
      $ru->seat_code = $request->seat_code;
      $ru->price = $request->price;
      $ru->save();

      return redirect('reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ru = Reservation::find($id);
        $ru->delete();

        return redirect('reservation');
    }
}
