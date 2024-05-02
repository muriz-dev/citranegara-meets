<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == "admin"){
            $users = User::where('role', 'user')->get();
            return view("pages.users.users",compact("users"));
        } else{
            return abort('403');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role == "admin"){
            return view("pages.users.crt_user");
        } else{
            return abort('403');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            "nama_lengkap"=> "required",
            "username"=> "required|unique:users,username",
            "password"=> "required",
            "role"=> "required",
        ]);

        User::create([
            "nama_lengkap" => $request->nama_lengkap,
            "username"=> $request->username,
            "password"=> bcrypt($request->password),
            "role"=> $request->role,
        ]);

        return redirect('/users')->with('berhasil','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(auth()->user()->role == "admin"){     
            $user = User::findOrFail($id);
            return view("pages.users.upt_user",compact("user"));
        } else{
            return abort('403');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            "nama_lengkap"=> "required",
            "username"=> "required|unique:users,username,".$user->id.',id',
            "role"=> "required",
        ]);

        $user->update([
            "nama_lengkap" => $request->nama_lengkap,
            "username"=> $request->username,
            "password"=> bcrypt($request->password),
            "role"=> $request->role,
        ]);

        return redirect('/users')->with('berhasil','Data user berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('berhasil','Data user berhasil dihapus');
    }
}
