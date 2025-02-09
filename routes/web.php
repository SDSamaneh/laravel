<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Jobs\ProcessVideo;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\Video;
use Carbon\Factory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

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


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('video.update');
Route::get('/categories/{category}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');


Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('documents', [DocumentController::class, 'store'])->name('documents.store');
Route::post('/upload-pdf', [DocumentController::class, 'upload'])->name('documents.update');


// Route::get('duration', function () {
//     $ffprobe = FFMpeg\FFProbe::create();
//     $duration = $ffprobe
//         ->format(Storage::path('videos/lNjwGQedXPgEwEaCO9WFvhCFgf8PRxIsO3Bby1rA.mp4'))
//         ->get('duration');
//     dd($duration);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
