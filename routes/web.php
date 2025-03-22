 <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "view('welcome')";
});
Route::get('/about', action: fn ()=> [
        'name' => 'John Doe',
        'age' => 30,
    ]); 