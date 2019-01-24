<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nome', 'MeuControlador@getNome');

Route::get('/idade', 'MeuControlador@getIdade');

Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::get('/nome/{id}', 'MeuControlador@getNomeById');

Route::resource("/cliente", 'ClienteControlador');

Route::post('/cliente/requisitar', 'ClienteControlador@requisitar');
