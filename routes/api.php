<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hola', function () {
    return 'Hola Mundo!!!';
});
