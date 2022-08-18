<?php

use App\Http\Controllers\AllBlogController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
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

Route::get('/user', function () {
    return view('user');
})->middleware(Authenticate::class)->name('user');

Route::get('admin', function () {
    return view('admin');
})->middleware(IsAdmin::class);

Route::get('/blog_page', function () {
    return view('blog_page');
})->name('blog_page');

Auth::routes();
Route::get('user', 'AllBlogController@index')->name('index');

Route::get('blog_page/{id}', 'AllBlogController@show')->name('blog_page');

Route::get('edit/{id}', 'AllBlogController@edit')->name('edit');



Route::get('admin', 'AllBlogController@index1')->name('index1');

Route::get('admin/{id}', 'AllBlogController@test')->name('deleted');

Route::get('del_blog_page', 'AllBlogController@delshow')->name('del_blog_page');

Route::get('add', 'AllBlogController@add')->name('add');


Route::post('admin/{id}', 'AllBlogController@update')->name('update');

Route::post('admin', 'AllBlogController@create')->name('create');
