<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('common.about.index');
    }
    
    public function add()
    {
        return view('common.about.create');
    }

    public function create()
    {
        return redirect('common/about/create');
    }

    public function edit()
    {
        return view('common.about.edit');
    }

    public function update()
    {
        return redirect('admin/items/edit');
    }
}
