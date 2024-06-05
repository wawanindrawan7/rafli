<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $data = Tanaman::all();
        return view('tanaman.index', compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('tanaman.create');
        } else {
            $this->validate($request, [
                'nama' => 'required',
            ]);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gambar', $gambar->hashName());


            $data = Tanaman::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'gambar' => $gambar->hashName(),
            ]);

            if ($data) {
                //redirect dengan pesan sukses
                return redirect('tanaman')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('tanaman/create')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function edit(Request $request)
    {
        if ($request->method() == 'GET') {
            $data = Tanaman::find($request->id);
            return view('tanaman.edit', compact('data'));
        } else {
            $this->validate($request, [
                'nama' => 'required',
            ]);

            $data = Tanaman::find($request->id);

            if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
                $gambar = $request->file('gambar');
                $gambarPath = basename($gambar->storeAs('public/paket', $gambar->hashName()));
            } else {
                // Jika tidak ada gambar yang diunggah, gunakan gambar yang sudah ada
                $gambarPath = $data->gambar;
            }


            $data->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'gambar' => $gambarPath
            ]);


            if ($data) {
                //redirect dengan pesan sukses
                return redirect('tanaman')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('tanaman/edit')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function delete(Request $request)
    {
        $data = Tanaman::find($request->id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect('tanaman')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('tanaman')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
