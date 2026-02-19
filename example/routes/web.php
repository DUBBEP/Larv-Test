<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Webpage;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

//Route::resource('jobs', JobController::class)->middleware('auth');

Route::controller(JobController::class)->group(function () {
     Route::get('/jobs', 'index');
     Route::get('/jobs/create', 'create');
     Route::get('/jobs/{job}', 'show');
     
     Route::post('/jobs', 'store')
     ->middleware('auth');
     
     Route::get('/jobs/{job}/edit', 'edit')
     ->middleware('auth')
     ->can('edit', 'job');
     
     Route::patch('/jobs/{job}', 'update');
     Route::delete('/jobs/{job}', 'destroy');
});

Route::controller(RegisterUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout','destroy');
});

Route::get('/articles', function () {
    $articles = Article::with('journalist')->get();

    return view('articles', [
        'articles' => $articles
    ]);
});

Route::get('/webpage', function () {
    $webpages = Webpage::all();

    return view('webpage', [
        'webpages' => $webpages
    ]);
});
