<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id_user','ASC')->get();
        return view('userCRUD.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        ['username' => 'required',
         'password' => 'required',
         'nama' => 'required',
         'alamat' => 'required',
         'no_hp' => 'required',
         'asal_sekolah' => 'required',
         'email' => 'required']);

         if($request->password != $request->cnf_psw)
		{
			return redirect()->back()->with('alert', 'Password harus sama');
        }
        else
        {
            User::create($request->all());
            return redirect()->route('User.index')->with('success','Item created successfully');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=User::find($id);
        return view ('userCRUD.show',compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('userCRUD.edit',compact('users'));
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
        $this->validate($request, ['username' => 'required']);

        User::find($id)->update($request->all());
        return redirect()->route('User.index')->with('success','Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        User::find($id_user)->delete();
        return redirect()->route('User.index')->with('success','Item Deleted Successfully');
    }
}
