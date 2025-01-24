<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; 
use App\Http\Controllers\TempController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CustomerController;


// Route::get('/test-db', function () {
//     try {
//         DB::connection()->getPdo();
//         return "Connected successfully to the database.";
//     } catch (\Exception $e) {
//         return "Could not connect to the database. Please check your configuration. Error: " . $e->getMessage();
//     }
// });

Route::get('/', function () {
    return "<h1>Hello </h>";
});

Route::get('/test1', function () {
    return "<h1>Test 1 Page and</h1><br><a href='https://google.com'>Google</a>";
});

Route::get('/nu', function () {
    return view('hello');
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/st/{x}/{y}', [StudentController::class, 'calc']);

Route::get('/temp/{f}', [TempController::class, 'convert']);

Route::get('/products', [ProductController::class, 'index']);


Route::get('/customers', [CustomerController::class, 'index'])->name("customers.index");
Route::get('/customers/create', [CustomerController::class, 'create'])->name("customers.create");
Route::post('/customers', [CustomerController::class, 'store'])->name("customers.store");
Route::get('/customers/{id}', [CustomerController::class, 'show123'])->name("customers.show");
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name("customers.edit");
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name("customers.update");
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name("customers.destroy");
