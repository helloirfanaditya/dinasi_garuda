<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function redirect()
    {
        if (auth('admin')->check()) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/admin/login');
        }
    }

    public function index()
    {
        return view('admin.home');
    }
}
