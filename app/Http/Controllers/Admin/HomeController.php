<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;

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
        $setTitleCollection = [];
        $setViewCollection = [];
        $titleCollection = Collection::orderBy('view', 'desc')->get();
        foreach ($titleCollection as $collection) {
            $setTitleCollection[] = $collection->collection;
            $setViewCollection[] = $collection->view;
        }
        $afterTitleCollection = json_encode(array_values($setTitleCollection));
        $afterViewCollection = json_encode(array_values($setViewCollection));
        return view('admin.home', compact('titleCollection', 'afterTitleCollection', 'afterViewCollection'));
    }
}
