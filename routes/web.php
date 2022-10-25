<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GreetingController;

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


//for normal routing
/*
Route::get('/greet/{name?}', function ($name = 'guest') {
    return "Hey $name how's it going";
});//here after route parameter {name}, ? is optional, if no parameter given in the route then it will show the default value guest
*/

//for controller
Route::get('/greet/{name?}', [GreetingController::class, 'greet']);//we need to import the class here and it will be added as a namespace in the top. if we don't do that we will need to use the full path instead of only the controller name.


Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');