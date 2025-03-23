 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']); 
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}-{id}', [PostController::class, 'show'])
->where([
  'slug' => '[a-z0-9-]+',
   'id' => '[0-9]+'
  ]);



//jjjjjjjjhcccccxdffgghh
  