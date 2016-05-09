<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExpController extends Controller
{
    public function create()
    {
        return view('about.exp');
    }
}
