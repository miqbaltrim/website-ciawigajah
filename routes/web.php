<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TamanController;
use App\Http\Controllers\BanksampahController;

// Route melihat PDF
Route::get('/documents/{filename}', function ($filename) {
    $path = public_path('documents/' . $filename);

    if (file_exists($path)) {
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
        ]);
    }

    abort(404);
});

Route::get('/taman', [TamanController::class, 'index']);

Route::get('/banksampah', [BanksampahController::class, 'index']);

Route::view('/404', 'errors.404')->name('error.404');

// Route Komentar
Route::resource('comments', CommentController::class);

//Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

// Route Page About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route Tampilan Konten Blog & Pagination
Route::get('/', function () {
    $posts = Post::orderByDesc('created_at')->paginate(6);
    return view('welcome', ["post"=>$posts]);
});

// Route Readmore
Route::get('/blog/{post}', [PostController::class,'readmore'])->name('readmore');

Route::get('/dashboard', [PostController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/create',function(){
    return view('create');
    });
    
    Route::post('/post',[PostController::class,'store']);
    Route::delete('/delete/{id}',[PostController::class,'destroy']);
    Route::get('/edit/{id}',[PostController::class,'edit']);
    
    Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
    Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);
    
    Route::put('/update/{id}',[PostController::class,'update']);


    
require __DIR__.'/auth.php';
