<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\temanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teman',[temanController::class,'index']) ->name('sahabatselamanya');