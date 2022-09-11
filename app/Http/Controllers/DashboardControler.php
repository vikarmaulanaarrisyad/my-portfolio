<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function index()
    {
        //cek user login
        if (auth()->user()->hasRole('admin')) {
            return view ('backend.admin.dashboard.index');
        }
            return view ('backend.user.dashboard.index');
    }
}
