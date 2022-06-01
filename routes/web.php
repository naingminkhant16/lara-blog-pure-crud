<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index'])->name('blog.index');

Route::view('/create', 'create')->name('blog.create.view');

Route::post('/create', [BlogController::class, "create"])->name('blog.create');

Route::get('/blogs/{id}', [BlogController::class, 'detail'])->name('blog.detail');

Route::get('/edit/{blog}', function (Blog $blog) {
    return view('edit', ['blog' => $blog]);
})->name('blog.edit.view');

Route::put('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');

Route::delete('/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
