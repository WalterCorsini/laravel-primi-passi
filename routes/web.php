<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home-page', function () {
    return view('index');
})->name('index');

Route::get('/pagina-contatti', function () {
    $data =[
        'phone' =>  '3339933932',
        'email' =>  'nome@email.it',
        'fax'   =>  '0833444430'
    ];
    return view('contact',$data);
})->name('contact');

Route::get('/pagina-chi-siamo', function () {
    return view('about');
})->name('about');

