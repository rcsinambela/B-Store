<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // View 'dashboard.blade.php' yang ada di folder resources/views
    }
}
