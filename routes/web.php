<?php

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

use function foo\func;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return 'post';
});

Route::match(['get', 'post'], 'match', function () {
    return 'match';
});


Route::any('any', function () {
    return 'any';
});

Route::get('para/{id}', function ($id) {
    return "para/{$id}";
});

//自定义的默认参数
Route::get('para/i/{name2?}', function ($name2 = 'sun') {
    return "para/i/{$name2}";
})->where('name2','[A-Za-z]+');

//自定义的参数
Route::get('para/name/{name2?}', function ($name2 = 'sun') {
    return "para/name/{$name2}";
})->where('name2', '[A-Za-z]+');

//自定义两个参数
Route::get('para/name2/{name2?}/{id?}', function ($name2 = 'sun',$id='111') {
    return "para/name/{$name2}/{$id}";
})->where(['name2'=>'[A-Za-z]+','id'=>'[0-9]+']);




