<?php

namespace App\Http\Controllers;

use App\Models\BookJurnal;
use Illuminate\Http\Request;

class BookJurnalController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $data = BookJurnal::all();
        return view('book-jurnal.index', compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('book-jurnal.create');
        } else {
            $this->validate($request, [
                'nama' => 'required',
            ]);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gambar', $gambar->hashName());


            $data = BookJurnal::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambar->hashName(),
            ]);

            if ($data) {
                //redirect dengan pesan sukses
                return redirect('book-jurnal')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('book-jurnal/create')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function edit(Request $request)
    {
        if ($request->method() == 'GET') {
            $data = BookJurnal::find($request->id);
            return view('book-jurnal.edit', compact('data'));
        } else {
            $this->validate($request, [
                'nama' => 'required',
            ]);

            $data = BookJurnal::find($request->id);

            if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {

                $gambar = $request->file('gambar');
                $gambarPath = basename($gambar->storeAs('public/paket', $gambar->hashName()));
            } else {
                // Jika tidak ada gambar yang diunggah, gunakan gambar yang sudah ada
                $gambarPath = $data->gambar;
            }


            $data->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarPath
            ]);


            if ($data) {
                //redirect dengan pesan sukses
                return redirect('book-jurnal')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('book-jurnal/edit')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function delete(Request $request)
    {
        $data = BookJurnal::find($request->id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect('book-jurnal')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('book-jurnal')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
