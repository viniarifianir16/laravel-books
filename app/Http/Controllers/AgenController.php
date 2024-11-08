<?php

namespace App\Http\Controllers;

class AgenController extends Controller
{
    public function index()
    {
        return view('agen.dashboard'); // Pastikan membuat file Blade ini
    }
}
