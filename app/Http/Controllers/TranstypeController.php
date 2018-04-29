<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transtype;
use Auth;

class TranstypeController extends Controller
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
          $trans = Transtype::all()->sortByDesc('id');
          return view('transtype.index')->with('types',$trans);
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
      return view('transtype.create');
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
          'description' => 'required',
        ]);

        $as = new Transtype();
        $as->description = $request->description;
        $as->save();

        return redirect('transtype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $trans = Transtype::find($id);
      return view('transtype.view')->with('types',$trans);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $trans = Transtype::find($id);
      return view('transtype.edit')->with('types',$trans);
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
        'description' => 'required',
      ]);

      $as = Transtype::find($id);
      $as->description = $request->description;
      $as->save();

      return redirect('transtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $trans = Transtype::find($id);
      $trans->delete();
      return redirect('transtype');
    }
}
