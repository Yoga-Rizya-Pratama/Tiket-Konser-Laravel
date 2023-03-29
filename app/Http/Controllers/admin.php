<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan as pemesan;

class admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = pemesan::all();

        return view('home', ['data' => $data]);
    }
}
