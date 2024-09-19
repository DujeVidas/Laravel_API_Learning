<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// api/endpoint

Route::apiResource('customers',CustomerController::class);
Route::apiResource('invoices',InvoiceController::class);
Route::post('invoices/bulk', [InvoiceController::class, 'bulkStore']);