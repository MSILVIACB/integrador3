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

Route::get('/login', function () {
    return view('login');
});

Route::get('/termos-e-condicoes', function () {
    return view('termos-e-condicoes');
});
<<<<<<< HEAD
?>
=======

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::resource('aluno', 'AlunoController');
});
>>>>>>> a01e142d046f1028455671be5de4c9a444f7a6bb
