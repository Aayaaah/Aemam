<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{
    public function showString(){
        return '<h1>Static String</h1>';
    }

    
}

