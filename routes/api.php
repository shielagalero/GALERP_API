<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ManufacturingAddressController;
use App\Http\Controllers\Machine1Controller;


Route::post('manufacturing-addresses', [ManufacturingAddressController::class, 'store'])->name('manufacturing-addresses.store');
Route::get('manufacturing-addresses/{id}', [ManufacturingAddressController::class, 'show'])->name('manufacturing-addresses.show');
Route::put('manufacturing-addresses/{id}', [ManufacturingAddressController::class, 'update'])->name('manufacturing-addresses.update');
Route::delete('manufacturing-addresses/{id}', [ManufacturingAddressController::class, 'destroy'])->name('manufacturing-addresses.destroy');





// Route::get('manufacturing-addresses', [ManufacturingAddressController::class, 'index'])->name('manufacturing-addresses.index');




// Route::post('machines', [MachineController::class, 'store'])->name('machines.store');


// Route::put('machines/{id}', [MachineController::class, 'update'])->name('machines.update');


Route::apiResource('machines', Machine1Controller::class);







