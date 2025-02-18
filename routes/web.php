<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('home',HomeController::class);
Route::resource('contact',ContactController::class);
Route::resource('resume',ResumeController::class);
Route::resource('project',ProjectsController::class);