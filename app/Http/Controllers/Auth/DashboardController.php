<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexPage()
    {
        // return view('auth.dashboard');
        return view('admin.pages.dashboard.index');

    }
}
