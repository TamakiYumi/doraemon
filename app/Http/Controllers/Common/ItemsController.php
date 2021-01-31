<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function index()
    {
        return view('common.items.index');
    }
    
    public function add()
    {
        return view('common.items.create');
    }

    public function create()
    {
        return redirect('common/items/create');
    }

    public function edit()
    {
        return view('common.items.edit');
    }

    public function update()
    {
        return redirect('common/items/edit');
    }
}
