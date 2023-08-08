<?php

// app/Http/Controllers/TamanController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taman;

class TamanController extends Controller
{
    public function index()
    {
        return view('taman');
    }
}
