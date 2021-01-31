<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('common.news.index');
    }
    
    public function add()
    {
        return view('common.news.create');
    }

    public function create()
    {
        return redirect('common/news/create');
    }

    public function edit()
    {
        return view('common.news.edit');
    }

    public function update()
    {
        return redirect('common/news/edit');
    }
}
