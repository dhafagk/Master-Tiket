<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trans;
use App\Transtype;
use Auth;

class TransController extends Controller
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
          $trans = Trans::all()->sortByDesc('id');
          return view('trans.index')->with('transport',$trans);
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
      $trans = Transtype::all();
      return view('trans.create')->with('transport',$trans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'code' => 'required',
          'description' => 'required',
          'seat_qty' => 'required',
          'transportation_typeid' => 'required',
        ]);

        $as = new Trans();
        $as->code = $request->code;
        $as->description = $request->description;
        $as->seat_qty = $request->seat_qty;
        $as->transportation_typeid = $request->transportation_typeid;
        $as->save();

        return redirect('trans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $trans = Trans::find($id);
      return view('trans.view')->with('transport',$trans);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $trans = Trans::find($id);
      $type = Transtype::all();
      return view('trans.edit')->with('transport',$trans)->with('types',$type);
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
      $this->validate($request, [
        'code' => 'required',
        'description' => 'required',
        'seat_qty' => 'required',
        'transportation_typeid' => 'required',
      ]);

      $as = Trans::find($id);
      $as->code = $request->code;
      $as->description = $request->description;
      $as->seat_qty = $request->seat_qty;
      $as->transportation_typeid = $request->transportation_typeid;
      $as->save();

      return redirect('trans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $trans = Trans::find($id);
      $trans->delete();
      return redirect('trans');
    }
}
