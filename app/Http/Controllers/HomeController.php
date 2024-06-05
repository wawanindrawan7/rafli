<?php

namespace App\Http\Controllers;

use App\Models\BookJurnal;
use App\Models\SensorPertanian;
use App\Models\Tanaman;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $book = BookJurnal::count();
        $tanaman = Tanaman::count();
        $sensor = SensorPertanian::count();
        $users = User::count();
        return view('home', compact('book', 'tanaman', 'sensor', 'users'));
    }
}
