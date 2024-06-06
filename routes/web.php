<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    CarrosController,EventsController,MensagemController
};

Route::get('/',[EventsController::class,'index'])->name('/');
//Events Controller 
Route::get('/Carros',[CarrosController::class,'Carros'])->name('car');

Route::get('/Contactos',[EventsController::class,'contactos'])->name('contactos');
Route::get('/car/details/{id}',[EventsController::class,'DetailsCar']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
