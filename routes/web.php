<?php

use App\Http\Controllers\CoopController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user{id}', [UserController::class, 'show']);
Route::get('/user/word-export/{id}', [UserController::class, 'wordExport']);

Route::get('/coop{id}', [CoopController::class, 'index']);

Route::get('/form{id}', [FormController::class, 'index']);
Route::post('/form/post{id}', [FormController::class, 'store'])->name('send.form');
Route::get('/form/list', [FormController::class, 'list'])->name('form.list');
Route::get('/form/upload{id}', [FormController::class, 'uploadPage'])->name('form.upload.page');
Route::post('/form/upload{id}', [FormController::class, 'uploadFile'])->name('form.upload.file');
Route::get('/form/show-img', [FormController::class, 'showImages'])->name('form.show.img');
