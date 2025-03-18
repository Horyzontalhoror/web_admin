<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function indexPage()
    {
        return view('admin.pages.datasiswa.index');

    }
}
