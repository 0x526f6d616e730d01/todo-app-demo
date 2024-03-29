<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
    return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::get('/todo/{todo}', [TodoController::class, 'edit'])->name('todo.edit');

Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::put("/todo/{todo}", [TodoController::class, "update"])->name("todo.update");

Route::delete("/todo/{todo}", [TodoController::class, "delete"])->name("todo.delete");

