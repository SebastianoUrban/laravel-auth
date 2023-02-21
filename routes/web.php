<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectsController as AdminProjectsController;
use App\Http\Controllers\Guest\ProjectsController as GuestProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GuestProjectsController::class, 'index'])->name('guest.projects.index');


Route::middleware('auth')
->name('admin.')
->prefix('admin')
->group(function () {
    Route::resource('projects', AdminProjectsController::class);
    //Route::get('/admin', [DashboardController::class, 'index'])->name('index');
});



require __DIR__.'/auth.php';
