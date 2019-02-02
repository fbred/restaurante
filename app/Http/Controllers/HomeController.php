<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Mesas;
use Illuminate\Http\Request;

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
        $mesas = Mesas::all();
            $cat = Categorias::all();
        return view('layout.mesas',compact('mesas','cat'));
    }
}
