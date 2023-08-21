<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banksampah;

class BanksampahController extends Controller
{
    public function index()
    {
        return view('banksampah');
    }
}