<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route buat nampilin judul di halaman depan
Route::get('/', function () {
    $posts= Post::all();
    return view('welcome', ["post"=>$posts]);
});

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
