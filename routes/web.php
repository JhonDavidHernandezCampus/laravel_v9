<?php

use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;


/*
**esta es una forma diferente de hacer lo que esta en la parte de abajo
Route::get('/', [PageController::class, 'home'])->name("home");

Route::get('/blog',[PageController::class, 'blog'])->name("blog");

Route::get('blog/{slug}', [PageController::class, 'post'])->name("post");

 */
// con el ->name() nombro a la ruta para poder usarla en las vistas
Route::controller(PageController::class)->group(function (){
    Route::get('/',            'home')->name("home");

    Route::get('/blog',        'blog')->name("blog");

    Route::get('blog/{post:slug}',  'post')->name("post");
});
