<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimelineController extends Controller
{
    public function index()
    {
        return view('admin.timeline.index');
    }
    
    public function add()
    {
        return view('admin.timeline.create');
    }

    public function create()
    {
        return redirect('admin/timeline/create');
    }

    public function edit()
    {
        return view('admin.timeline.edit');
    }

    public function update()
    {
        return redirect('admin/timeline/edit');
    }
}