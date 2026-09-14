<?php

namespace App\Http\Controllers;
class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return view('dashboard.admin');
        }

        if ($user->role === 'kasir') {
            return view('dashboard.kasir');
        }

        abort(403, 'Role pengguna tidak dikenali.');
    }
}