<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function getIndex(){

       /* $obj = new \stdClass();

        $obj -> name = 'aya';
        $obj -> id = 5;
        $obj -> gender = 'female';
        
         return view('welcome', compact('obj')); */

         $names = [ 'ahmed', 'bassem'];
         return view('welcome', compact('names'));

       // return view('welcome') -> with ('name', 'aya gamal') ;
        
    }
}
