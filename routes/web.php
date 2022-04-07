<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//route('products')
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/result', [PagesController::class, 'result'])->name('result');

//Route to result
// Route::get('/result', function () {
//     return ("this is result endpoint");
// });

// Route to result but return a json object
// Route::get('/result', function () {
//     return response()->json([
//         'name' => 'leongxinnan',
//         'course' => 'laravel'
//     ]);
// });

// http://simple-algorithm-calculator.test/ == /
// http://simple-algorithm-calculator.test/result == /result