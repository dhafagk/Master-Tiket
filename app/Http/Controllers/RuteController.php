<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;
use App\Trans;
use Auth;

class RuteController extends Controller
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
        if (Auth::check()) {
        if (Auth::user()->level == 2) {
          $ru = Rute::all()->sortByDesc('id');
          return view('Rute.index')->with('rute',$ru);
        }else {
          return redirect('home');
        }
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $ru = Trans::all();
      return view('rute.create')->with('rute', $ru);
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
          'nis' => 'required|integer',
          'nama' => 'required',
          'gender' => 'required',
          'status' => 'required',
          'keterangan' => 'required',
        ]);

        $ru = new Rute();
        $ru->nis = $request->nis;
        $ru->nama = $request->nama;
        $ru->gender = $request->gender;
        $ru->status = $request->status;
        $ru->keterangan = $request->keterangan;
        $ru->save();

        return redirect('rute');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ru = Rute::find($id);
      return view('rute.view')->with('rute', $ru);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $ru = Rute::find($id);
      $tra = Trans::all();
      return view('rute.edit')->with('rute', $ru)->with('trans', $tra);
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
        'nis' => 'required|integer',
        'nama' => 'required',
        'gender' => 'required',
        'status' => 'required',
        'keterangan' => 'required',
      ]);

      $ru = Rute::find($id);
      $ru->nis = $request->depart_at;
      $ru->nama = $request->rute_from;
      $ru->gender = $request->rute_to;
      $ru->status = $request->price;
      $ru->keterangan = $request->transportationid;
      $ru->save();

      return redirect('rute');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ru = Rute::find($id);
        $ru->delete();
        return redirect('rute');
    }
}
