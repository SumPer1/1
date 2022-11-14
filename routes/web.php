<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('test/show', [TestController::class, 'show']);
Route::get('test/show/{param}', [TestController::class, "showw"]);
Route::get('greeting', function () {
  return view('welcome', ['name' => 'Samantha']);
});
Route::get('test/pizza', [TestController::class, "pizza"]);
Route::get('test/news', [TestController::class, "news"]);
Route::get('test/form', [TestController::class, 'form']);
Route::post('/test/result', [TestController::class, "form"]);
