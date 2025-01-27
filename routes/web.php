<?php

use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Models\Video;
use Carbon\Factory;
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

// Route::get('/factory', function () {
//     Video::factory()->create();
// });

// Route::get('/', 'App\Http\Controllers\UserController@index');
// or

// Route::get('/', function () {
//     // dd('Route');
//     return view('index');
// });
// Route::get('/panel', function () {
//     echo "hello panel ";
// });

// Route::get('/videos', [VideoController::class, 'index']);
//or
// Route::get('/videos', 'VideoController@index');

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('video.update');
Route::get('/categories/{category}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');


Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('documents', [DocumentController::class, 'store'])->name('documents.store');
