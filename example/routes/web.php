<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Webpage;
use App\Http\Controllers\JobController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);


// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

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
