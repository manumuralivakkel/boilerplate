<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('upload-image', [HomeController::class, 'imageUpload']);
Route::get('hello', [HomeController::class, 'hello']);
