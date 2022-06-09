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
        'links'=>[
            'home',
            'chi-siamo',
            'contatti',
            'social'
        ]
        
    ];
    return view('home',$data);
})->name ('home');



Route::get('/chi-siamo', function () {
    $data = [
        'links'=>[
            'home',
            
            'contatti',
            'social'
        ]
        
    ];
    return view('chi-siamo',$data);
})->name ('chi-siamo');

Route::get('/contatti', function () {
    $data = [
        'links'=>[
            'home',
            'chi-siamo',
            'social'
        ]
        
    ];
    return view('contatti',$data);
})->name ('contatti');

Route::get('/social', function () {
    $data = [
        'links'=>[
            'home',
            'chi-siamo',
            'contatti',
            
        ]
        
    ];
    return view('social',$data);
})->name ('social');
