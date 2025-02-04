<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('karyawan');
    }

    public function index()
    {
        return view('karyawan.dashboard');
    }
}
