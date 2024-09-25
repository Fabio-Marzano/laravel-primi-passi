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
    $welcome = "Homepage Laravel Primi Passi";

    return view('home', compact('welcome'));
})->name('homepage');

Route::get('/about', function(){
    $title = 'Il mio profilo';
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing el aspect et euismod tempor";
    $films = ['Harry Potter e la pietra filosofale', 'Harry Potter e la camera dei segreti', 'Harry Potter e il prigioniero di Azkaban', 'Harry Potter e il calice di fuoco'];
    return view('about', compact('title', 'text', 'films'));
})->name('about');

Route::get('/contacts', function(){
    $title = 'Contatti';
    $message = "Contattaci per ricevere le ultime notizie";
    return view('contacts', compact('title', 'message'));
})->name('contacts');