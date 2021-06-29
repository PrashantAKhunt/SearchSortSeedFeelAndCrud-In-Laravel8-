<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PostController::class,'index'])->name('post.index');

Route::post('/add',[PostController::class,'add'])->name('post.add');

Route::get('/addnew',[PostController::class,'addnew'])->name('post.addnew');

Route::get('/edit/{id}',[PostController::class,'edit'])->name('post.edit');

Route::get('/delete/{id}',[PostController::class,'delete'])->name('post.delete');

Route::post('/update',[PostController::class,'update'])->name('post.update');