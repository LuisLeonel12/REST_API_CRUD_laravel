<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Student_Controller;

//listar los usuarios de la aplicacion
Route::get('/users', [Student_Controller::class, 'index']  );



//listar los usuarios de la aplicacion por medio de su id
Route::get('/users/{id}', function () {
    return 'obtaining a user';
});

//creando a los usuarios de la aplicacion
Route::post('/users', function () {
    return 'creating users';
});

//actualizando un usario de la aplicacion por medio de su id
Route::put('/users/{id}', function () {
    return 'Updating user';
});

//eliminando un usuario de la aplicacion
Route::put('/users/{id}', function () {
    return 'deleted user';
});
