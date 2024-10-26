<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\ClienteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::resource('membresias', MembresiaController::class)->only([
        'edit','update'
    ]);

    Route::resource('rentas', RentaController::class)->only([
        'create', 'edit','destroy','store','update'
    ]);

    Route::resource('clientes', ClienteController::class)->only([
        'show', 'create','store'
    ]);
});