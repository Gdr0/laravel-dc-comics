<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', [ComicController :: class, 'index'])-> name ('users.index');
Route::get('/users/create', [ComicController :: class, 'create'])->name('users.create');
Route :: post('/users', [ComicController :: class, 'store'])
    -> name('users.store');
Route::get('/users/{id}', [ComicController :: class, 'show'])-> name('users.show');
