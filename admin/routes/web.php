<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\expenseController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\VendorsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  [HomeController::class, 'index'])->middleware(['auth']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/711', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
});

Route::group(['prefix' => 'settings'], function () {
    Route::get('/', [SettingsController::class, 'index']);
    Route::get('/add', [SettingsController::class, 'add']);
    Route::get('/add/{id}', [SettingsController::class, 'add']);
    Route::post('/save', [SettingsController::class, 'save']);
    Route::get('/delete/{id}', [SettingsController::class, 'delete']);
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [categoryController::class, 'index']);
    Route::get('/add', [categoryController::class, 'add']);
    Route::get('/add/{id}', [categoryController::class, 'add']);
    Route::post('/save', [categoryController::class, 'save']);
    Route::get('/delete/{id}', [categoryController::class, 'delete']);
});
Route::group(['prefix' => 'package'], function () {
    Route::get('/', [PackageController::class, 'index']);
    Route::get('/add', [PackageController::class, 'add']);
    Route::get('/add/{id}', [PackageController::class, 'add']);
    Route::post('/save', [PackageController::class, 'save']);
    Route::get('/delete/{id}', [PackageController::class, 'delete']);
    Route::get('/imageedit/{nid}/{id}', [PackageController::class, 'imageedit']);
    Route::post('/saveimg', [PackageController::class, 'saveimg']);
    Route::get('/deleteimg/{nid}/{id}', [PackageController::class, 'deleteimg']);
    Route::get('/cloop/{id?}', [PackageController::class, 'cloop']);
});

//Aditional add on

Route::get('mi00', function () {
    Artisan::call('migrate');
    return 'Database migration success.';
});
