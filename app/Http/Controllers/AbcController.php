<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbcController extends Controller
{
    public function index()
    {
       return view ("pages.abc.index");
    }
}
