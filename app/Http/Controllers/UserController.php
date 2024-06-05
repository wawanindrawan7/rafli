<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $data = User::all();
        return view('user.index', compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('user.create');
        } else {

            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'alamat' => $request->alamat,
                'password' => Hash::make($request->password),
            ]);

            if ($data) {
                //redirect dengan pesan sukses
                return redirect('users')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('users/create')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function edit(Request $request)
    {
        if ($request->method() == 'GET') {
            $data = User::find($request->id);
            return view('user.edit', compact('data'));
        } else {

            $data = User::find($request->id);

            $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'alamat' => $request->alamat,
                'password' => Hash::make($request->password),
            ]);


            if ($data) {
                //redirect dengan pesan sukses
                return redirect('users')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('users/edit')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function delete(Request $request)
    {
        $data = User::find($request->id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect('users')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('users')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
