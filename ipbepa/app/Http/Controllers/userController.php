<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\bus;
use App\Models\User;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;
use DataTables;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users'] = user::all();
        return view('pages.users.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:6|max:255|',
            'role_name' => 'required|',

            
            
            
        ],[
            'name.required' => 'Name is required.',
            'name.max' => 'Maximum length is 255 characters.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password should have minimum of 6 characters.',
            'password.max' => 'Password should have maximum of 255 characters.',

            ]);
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_name = $request->role_name;
        
        if ($request-> role_name = "Bus Driver")
            {
                $user->roles = 2;
            } elseif ($request-> role_name = "Conductor")
            {
                $user->roles = 3;
            } elseif ($request-> role_name = "Admin")
            {
                $user->roles = 1;
            }

        $user->save();
        
        return redirect('/users')->with('msg', 'Information Added!');
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
    public function destroy(user $user)
    {
        $user->delete();
        return redirect('/users')->with('delete', 'Information Deleted!');
    }
}
