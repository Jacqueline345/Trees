<?php

namespace App\Http\Controllers;

use App\Models\signup;
use App\Models\country;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $texto
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new usuarios;
        $usuarios->name=$request->input('firstName');
        $usuarios->lastname=$request->input('lastName');
        $usuarios->phone_number=$request->input('phoneNumber');
        $usuarios->username=$request->input('username');
        $usuarios->address=$request->input('address');
        $usuarios->country=$request->input('country');
        $usuarios->password=$request->input('password');
        $usuarios->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(signup $signup)
    {
        //
    }
}
