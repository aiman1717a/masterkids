<?php

//use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function foo\func;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [CategoryController::class, 'index']);
