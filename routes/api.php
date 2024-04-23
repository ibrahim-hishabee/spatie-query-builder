<?php

use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/expense', ExpenseController::class);
Route::apiResource('/expense-category', ExpenseCategoryController::class);
