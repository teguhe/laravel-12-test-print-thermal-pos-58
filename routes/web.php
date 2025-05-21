<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrinterThermalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/print-view', [PrinterThermalController::class, 'index'])->name('print.view');
Route::get('/print-struk', [PrinterThermalController::class, 'print'])->name('print.struk');
