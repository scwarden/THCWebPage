<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//User related routes
Route::get('/', [UserController::class, "showCorrectHomepage"]);
