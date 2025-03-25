 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']); 

Route::prefix('/blog')->group( function (){
  
  Route::get('/', [PostController::class, 'index'])->name('blog.show');
  Route::get('/{slug}-{id}', [PostController::class, 'show'])->where([
    'id' => '[0-9]+',
    'slug' => '[a-z0-9\-]+',
    ])->name('show');
});




//jjjjjjjjhcccccxdffgghh
  