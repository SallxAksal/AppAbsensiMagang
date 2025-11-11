<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('dashboard.admin');
        } elseif ($user->role === 'magang') {
            return view('dashboard.magang');
        }

        return redirect('/')->withErrors('Role tidak dikenali.');
    }
}
