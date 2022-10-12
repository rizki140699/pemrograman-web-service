<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $input = $request->all();

        // validate user input

        $request->validate([
            'name' => 'required|max:50|string',
            'username' => 'required|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);

        // encrypt password
        $input['password'] = Hash::make($request->password);

        // check if user is not registered

        $check = Pengguna::where('email', '=', $request->email)->get();

        // send flash message if user already exists
        if($check->count() > 0){
            return redirect('/register')->with(['user-exists' => 'email telah terdaftar']);
        }else{

            // insert user into database

            Pengguna::create($input);

            // redirect to register page with message
            return redirect("/register")->with(['register-success' => 'Berhasil mendaftar']);
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
