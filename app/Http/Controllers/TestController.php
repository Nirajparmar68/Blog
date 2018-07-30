<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function  test()
    {
        $user = 'Test Controller';
        return view('test', compact('user'));
    }
}
