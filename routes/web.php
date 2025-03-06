<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\XdebugController;
//use App\Http\Controllers\Person\NaturalPersonController;
use App\Http\Controllers\Person\PersonController;
use Illuminate\Support\Facades\Route;


route::resource('/customer', CustomerController::class);

route::get('person', [PersonController::class, 'index'])->name('person.index');
route::post('person', [PersonController::class, 'store'])->name('person.store');
//route::get('naturalperson/create', [NaturalPersonController::class, 'create'])->name('naturalperson.create');

Route::get('xdebug', [XDebugController::class, 'xdebug']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
