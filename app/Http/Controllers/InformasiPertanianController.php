<?php

namespace App\Http\Controllers;

use App\Models\BookJurnal;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class InformasiPertanianController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $book = BookJurnal::all();
        $tanaman = Tanaman::all();
        return view('informasi-pertanian.index', compact('book', 'tanaman'));
    }
}
