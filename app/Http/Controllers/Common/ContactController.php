<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('common.contact.index');
    }
    
    public function add()
    {
        return view('common.contact.create');
    }

    public function create()
    {
        return redirect('common/contact/create');
    }

    public function edit()
    {
        return view('common.contact.edit');
    }

    public function update()
    {
        return redirect('common/contact/edit');
    }
}
