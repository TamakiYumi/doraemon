<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function index()
    {
        return view('admin.items.index');
    }
    
    public function add()
    {
        return view('admin.items.create');
    }

    public function create()
    {
        return redirect('admin/items/create');
    }

    public function edit()
    {
        return view('admin.items.edit');
    }

    public function update()
    {
        return redirect('admin/items/edit');
    }
}