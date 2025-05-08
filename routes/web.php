<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\IndexController as TaskIndexController;
use App\Http\Controllers\Task\CreateController as TaskCreateController;
use App\Http\Controllers\Task\StoreController as TaskStoreController;
use App\Http\Controllers\Task\DestroyController as TaskDestroyController;
use App\Http\Controllers\Task\UpdateController as TaskUpdateController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->prefix('tasks')->group(function () {
    Route::get('/', TaskIndexController::class)->name('task.index');
    Route::get('/create', TaskCreateController::class)->name('task.create');
    Route::post('/', TaskStoreController::class)->name('task.store');
    Route::delete('/{task}', TaskDestroyController::class)->name('task.destroy');
    //Route::patch('/{task}', TaskUpdateController::class)->name('task.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
