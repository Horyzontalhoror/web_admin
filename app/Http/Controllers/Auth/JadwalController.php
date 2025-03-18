<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function indexPage()
    {
        return view('admin.pages.jadwal.index');

    }
}
