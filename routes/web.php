<?php

use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/place', [PlaceController::class, 'index'])->name('place.index');
Route::get('/place/create', [PlaceController::class, 'create'])->name('place.create');
Route::post('/place', [PlaceController::class, 'store'])->name('place.store');
Route::get('/place//{id}/edit', [PlaceController::class, 'edit'])->name('place.edit');
Route::put('/place/{id}', [PlaceController::class, 'update'])->name('place.update');
Route::delete('place/{place}',[PlaceController::class,'destroy'])->name('place.destroy');




Route::get('places/{place}',[PlaceController::class,'comentar'])->name('place.show');