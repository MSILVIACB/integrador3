<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/planos', function () {
    return view('planos');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/contato', function () {
    return view('contato');
});

?>
