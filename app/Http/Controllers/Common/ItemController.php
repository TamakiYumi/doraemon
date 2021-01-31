<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        return view('common.item.index');
    }
    
    public function add()
    {
        return view('common.item.create');
    }

    public function create()
    {
        return redirect('common/item/create');
    }

    public function edit()
    {
        return view('common.item.edit');
    }

    public function update()
    {
        return redirect('common/item/edit');
    }
}
