<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Article;
use App\Models\Webpage;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();

    return view('jobs', [
        'jobs' => $jobs
    ]);
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

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});