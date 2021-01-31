<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimelineController extends Controller
{
    public function index()
    {
        return view('common.timeline.index');
    }
    
    public function add()
    {
        return view('common.timeline.create');
    }

    public function create()
    {
        return redirect('common/timeline/create');
    }

    public function edit()
    {
        return view('common.timeline.edit');
    }

    public function update()
    {
        return redirect('common/timeline/edit');
    }
}
