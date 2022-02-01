<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
// use App\Http\Controllers\PagesController;
// use App\Http\Controllers\PostsController;

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

Route::resource('/cars', CarsController::class);
// Route::resource('/create', CarsController::class);


///Post endpoint
// Route::get('/posts', [PostsController::class, 'index']);


///Laravel 8 (New)

// Route::get('/', [PagesController::class, 'index']);
// Route::get('/about', [PagesController::class, 'about']);



// Route::get('/products',
//     [ProductsController::class, 'index'])->name('products');
//Route::get('/products/about', [ProductsController::class, 'about']);

///laravel 8 (Also New)
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

///Before laravel 8
//Route::get('/products', 'ProductsController@index');

///Route that sends back a view
//Route::get('/', function () {
   //return view('home');
// });

///Route to users - string
//Route::get('/users', function ()  {
  //  return 'Welcome to the users page';
// });

///Route to users - Array(JSON)
//Route::get('/users', function () {
   // return ['PHP', 'HTML', 'Laravel'];
//});


///Route to users - JSON object
//Route::get('/users', function ()  {
    //return response()->json([
        //'name' => 'Dary',
        //'course' => 'Laravel Beginners To Advance'
  //  ]);
//});

///Route to users - function
//Route::get('/users', function () {
  //  return redirect('/');
//});

///car.com == /
///car.com/users == /users

//#23 ROUTE PARAMETER
// /products = all products
// /products/productName
// /products/productID

// // /Pattern is integer
// Route::get('/products/{id}',
//     [ProductsController::class, 'show'])->where('id', '[0-9]+');


// /Pattern is integer

// Route::get('/products/{name}/{id}',
//     [ProductsController::class, 'show'])->where([
//         'name' => '[a-z]+',
//         'id' => '[0-9]+'
//     ]);

// Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

