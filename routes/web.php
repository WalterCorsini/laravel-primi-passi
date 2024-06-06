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
    $data_home = [
        'companies' => ["Goldman Sachs","Oaktree","Elioot","Boolean",]
    ];
    return view('index',$data_home);
})->name('index');


Route::get('/pagina-contatti', function () {
    $data_contact =[
        'phone' =>  '3339933932',
        'email' =>  'nome@email.it',
        'fax'   =>  '0833444430'
    ];
    return view('contact',$data_contact);
})->name('contact');



Route::get('/pagina-chi-siamo', function () {
    $data_about =[
        'message' => 'siamo leader nel settore ed offriamo una vasta gamma di servizi'
    ];
    return view('about',$data_about);
})->name('about');

