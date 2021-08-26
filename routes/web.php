<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/about', function () {
    return view("about");
});

// Route::get('/news', [NewsController::class, 'index']);

//bỏ comment protected $namespace = 'App\\Http\\Controllers'; ở file RouteServiceProvider
Route::get('/news', 'NewsController@index');

Route::get('/test', 'MyController@index');
