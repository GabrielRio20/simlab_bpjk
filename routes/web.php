<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Auth
Auth::routes();

//Route for public
Route::get('/', [HomeController::class, 'home'])->name('homePage');
