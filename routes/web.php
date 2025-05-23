<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\IndexController as TaskIndexController;
use App\Http\Controllers\Task\StoreController as TaskStoreController;
use App\Http\Controllers\Task\DestroyController as TaskDestroyController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->prefix('tasks')->group(function () {
    Route::get('/', TaskIndexController::class)->name('task.index');
    Route::get('/create', [TaskStoreController::class, 'create'])->name('task.create');
    Route::post('/', [TaskStoreController::class, 'store'])->name('task.store');
    Route::delete('/{task}', TaskDestroyController::class)->name('task.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
