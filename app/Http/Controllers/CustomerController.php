<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
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
        $customer = Customer::all()->sortByDesc('id');
        return view('customer.index')->with('customerindex', $customer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
          'name' => 'required|string|',
          'address' => 'required',
          'phone' => 'required|numeric',
          'gender' => 'required',
        ]);

        $storage = new Customer();
        $storage->name = $request->name;
        $storage->address = $request->address;
        $storage->phone = $request->phone;
        $storage->gender = $request->gender;
        $storage->save();

        return redirect('customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $yu = Customer::find($id);
        return view('customer.view')->with('sa',$yu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Customer::find($id);
        return view('customer.edit')->with('toedit',$edit);
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
      $this->validate($request ,[
        'name' => 'required|string|',
        'address' => 'required',
        'phone' => 'required|numeric',
        'gender' => 'required',
      ]);

      $storage = Customer::find($id);
      $storage->name = $request->name;
      $storage->address = $request->address;
      $storage->phone = $request->phone;
      $storage->gender = $request->gender;
      $storage->save();

      return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Customer::find($id);
        $delete->delete();

        return redirect('customer');
    }
}
