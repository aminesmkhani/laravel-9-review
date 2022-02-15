<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
//    return str()->slug('hello amin its laravel 9!');
//    throw new Exception('Whoops');
    return Blade::render('{{ $greeting}}, World',['greeting' => 'Hello']);
    return view('welcome');
})->name('home');

Route::get('/endpoint', function () {
 //   return redirect('/');
    return to_route('home');
});

Route::controller(PostController::class)->group(function (){
    Route::get('/posts','index');
    Route::get('/posts/{posts}','show');
    Route::post('/posts','store');

});


