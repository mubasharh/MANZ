<?php

namespace MANZ\Http\Controllers;

use MANZ\client;
use Illuminate\Http\Request;
use Session;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('clients');
        //Session::flash('success','New Data Added Successfully!..');
        return view('clients')->with('clients',client::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addclient');
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
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'c_address' => 'required'
        ]);
        //dd($request->all()); //Display all Data 
        $client = new client;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone_no = $request->phone_no;
        $client->address = $request->c_address;
        $client->save();
        Session::flash('success','New Data Added Successfully!..');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \MANZ\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MANZ\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MANZ\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MANZ\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = client::find($id);
        $client->delete();
        Session::flash('success','Data Deleted Successfully!..');
        return redirect()->route('clients');
    }
}
