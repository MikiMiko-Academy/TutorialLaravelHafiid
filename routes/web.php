<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {            
    return view('pages.home');
});

Route::get('/menu/{name}', function ($name) {
    
    $menu = [
        ['name' => 'Rendang', 'price' => 15000,],
        ['name' => 'Terong', 'price' => 5000,]
    ];
    
    return view('pages.menu_list', ['menu' => $menu] , ['name' => $name]);
});
