<?php

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
Route::options('/{path}', function(){
    return '';
})->where('path', '.*');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/cart', 'ShoppingCartController@indexByUser');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/category', function () {
    return view('category');
});


Route::get('/confermation', function () {
    return view('confermation');
});

Route::get('/login2', function () {
    return view('login');
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/elements', function () {
    return view('elements');
});

// Route::get('/prova',function(){
//     $scarpe_sizes = App\Category::where('name','Abbigliamento')
//     ->where('type','Giacche e cappotti')
//     ->where('gender','female')
//     ->first();
//     $product = App\Product::find(1);
//     $product->category()->associate($scarpe_sizes)->save();
//     dd($scarpe_sizes);
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/{gender}-clothing', 'ProductController@index')->name('product.index');
Route::get('/{gender}-clothing/{name}', 'ProductController@index_name')->name('product.index_name');
Route::get('/{gender}-clothing/{name}/{type}', 'ProductController@index_type')->name('product.index_name_type');
Route::get('/login2', function(){
    return view('auth.userfaces');
});

Route::get('{name}', 'ProductController@show')->name('product.show');

Route::post('/comment', 'CommentController@store')->name('product.comment');

Route::post('/wishlist', 'WishListController@store')->name('product.wishlist');

Route::post('/cart', 'ShoppingCartController@store')->name('product.cart');

