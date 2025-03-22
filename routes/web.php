 <?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', action: fn ()=> [
        'name' => 'John Doe',
        'age' => 30,
    ]); 