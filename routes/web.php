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
    $data = [
        'title' => 'Ciao sono la pagine home'
    ];
    return view('home', $data);
});


Route::get('/info', function () {
    $title = 'Sono la info';
    $text = 'clicca qui per tornare alla home';
    return view('info', compact('title', 'text'));
});
