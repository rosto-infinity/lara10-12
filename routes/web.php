<?php

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PostController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [HomeController::class, 'about']);

    Route::prefix('/blog')->controller(PostController::class)->group(function () {
        Route::get('/', 'index')->name('blog.index');
        Route::get('/new', 'create')->name('blog.create');
        Route::post('/new', 'store');
        Route::get('/{slug}-{post}', 'show')->where([
            'post' => '[0-9]+',
            'slug' => '[a-z0-9\-]+',
        ])->name('blog.show');
        Route::get('/{post}/edit', 'edit')->name('blog.edit');
        Route::post('/{post}/edit', 'update');
    });
