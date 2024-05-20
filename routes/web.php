<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FirstController;



Route::get('/', function () {

    $data = [];
    $data['id']= 5;
    $data['name']= 'Aya Gamal'; 
    return view( 'welcome', $data);
    
});

Route::get('landing', function () {
    return view('landing');
});

Route::get('about', function () {
    return view('about');
});

//route parameters

Route::get('test/{id?}', function () {
    return '<h1>Welcome</h1>';
});

Route::get('second', 'App\Http\Controllers\Admin\SecondController@showString');

Route::get('index', 'App\Http\Controllers\FirstController@getIndex');

Route::resource('news', NewsController::class);


Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');

