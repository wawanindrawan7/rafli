<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::id();
        $data = User::find($user_id);

        return view('profile.index', compact('data'));
    }

    public function edit(Request $request)
    {
        $user_id = Auth::id();
        $data = User::find($user_id);

        $this->validate($request, [
            'alamat' => 'nullable',
        ]);

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,

        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect('profile')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect('profile')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
