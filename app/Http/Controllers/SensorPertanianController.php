<?php

namespace App\Http\Controllers;

use App\Models\SensorPertanian;
use Illuminate\Http\Request;

class SensorPertanianController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $data = SensorPertanian::all();
        return view('sensor-pertanian.index', compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('sensor-pertanian.create');
        } else {
            $this->validate($request, [
                'peta' => 'required',
            ]);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gambar', $gambar->hashName());


            $data = SensorPertanian::create([
                'peta' => $request->peta,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambar->hashName(),
            ]);

            if ($data) {
                //redirect dengan pesan sukses
                return redirect('sensor-pertanian')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('sensor-pertanian/create')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function edit(Request $request)
    {
        if ($request->method() == 'GET') {
            $data = SensorPertanian::find($request->id);
            return view('sensor-pertanian.edit', compact('data'));
        } else {
            $this->validate($request, [
                'peta' => 'required',
            ]);

            $data = SensorPertanian::find($request->id);

            if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {

                $gambar = $request->file('gambar');
                $gambarPath = basename($gambar->storeAs('public/paket', $gambar->hashName()));
            } else {
                // Jika tidak ada gambar yang diunggah, gunakan gambar yang sudah ada
                $gambarPath = $data->gambar;
            }


            $data->update([
                'peta' => $request->peta,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarPath
            ]);


            if ($data) {
                //redirect dengan pesan sukses
                return redirect('sensor-pertanian')->with(['success' => 'Data Berhasil Disimpan!']);
            } else {
                //redirect dengan pesan error
                return redirect('sensor-pertanian/edit')->with(['error' => 'Data Gagal Disimpan!']);
            }
        }
    }

    public function delete(Request $request)
    {
        $data = SensorPertanian::find($request->id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect('sensor-pertanian')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('sensor-pertanian')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
