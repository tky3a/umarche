<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTextController;
use App\Http\Controllers\LifeCycleTestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/component-test1', [ComponentTextController::class, 'showComponent1']);
Route::get('/component-test2', [ComponentTextController::class, 'showComponent2']);
Route::get('/serviceContainerTest', [LifeCycleTestController::class, 'showServiceContainerTest']);

require __DIR__ . '/auth.php';
