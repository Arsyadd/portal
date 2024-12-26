<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'welcome']);

Route::get('/page/{page:name}', PageController::class);

Route::get('/article/{article:slug}', [ArticleController::class,'detail']);
Route::get('/articles', [ArticleController::class,'list']);
