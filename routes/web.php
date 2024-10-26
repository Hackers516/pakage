<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcon;


// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/',[indexcon::class,'view'])->name('index');

Route::get('/edit/{id}',[indexcon::class,'editform'])->name('edit');

Route::post('/update/{id}',[indexcon::class,'updateform'])->name('update');

Route::post('/signup',[indexcon::class,'store'])->name('nawab');
