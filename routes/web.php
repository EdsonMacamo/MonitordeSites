<?php

use App\Http\Controllers\site\SiteController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto',[SiteController::class, 'contact']);
