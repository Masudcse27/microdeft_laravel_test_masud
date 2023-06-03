<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class students extends Controller
{
    public function studentdata($value='')
    {
        return view('student');
    }
}
