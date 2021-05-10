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




Route::get('/home', function () {
    
    $data = config('paste');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $pasta) {
        
        $pasta['id'] = $key;

        if ($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        } else if ($pasta['tipo'] == 'corta') {
            $corta[] = $pasta;
        } else if ($pasta['tipo'] == 'cortissima') {
            $cortissima[] = $pasta;
        };
        
    };

    return view('home', [
        'corta' => $corta,
        'lunga' => $lunga,
        'cortissima' => $cortissima,
    ]);
})->name('homepage');

Route::get('/prodotto/{id}', function($id) {

    $data = config('paste');

    $pasta  = $data[$id];
    return view('prodotto', [
        'pasta' => $pasta,
    ]);
})->where('id','[0-9]+')->name('prodotto');

Route::get('/news', function () {
    return view('news');
})->name('news');