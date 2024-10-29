<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\DisplayController;

Route::get('/displays/create', [DisplayController::class, 'create'])->name('displays.create');  // Show the form
Route::post('/displays', [DisplayController::class, 'store'])->name('displays.store');  // Handle form submission








