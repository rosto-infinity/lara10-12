 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']); 

Route::prefix('/blog')->controller(PostController::class)->group( function (){ 
  Route::get('/', 'index')->name('blog.index');
  Route::get('/{slug}-{id}', 'show')->where([
    'id' => '[0-9]+',
    'slug' => '[a-z0-9\-]+',
    ])->name('blog.show');
});




//jjjjjjjjhcccccxdffgghh
  