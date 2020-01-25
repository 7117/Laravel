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
})->where('name2', '[A-Za-z]+');

//自定义的参数
Route::get('para/name/{name2?}', function ($name2 = 'sun') {
    return "para/name/{$name2}";
})->where('name2', '[A-Za-z]+');

//自定义两个参数
Route::get('para/name2/{name2?}/{id?}', function ($name2 = 'sun', $id = '111') {
    return "para/name/{$name2}/{$id}";
})->where(['name2' => '[A-Za-z]+', 'id' => '[0-9]+']);


//路由别名:就是把别名加入了route组件中
Route::get('route/direct', ['as' => 'tion', function () {
    return array("tion", route('tion'));
}]);

//路由群组:目的是简化前缀一样的
Route::group(['prefix' => 'group'], function () {
    Route::get('route/1', ['as' => '1', function () {
        return array("1", route('1'));
    }]);
    Route::get('route/2', ['as' => '2', function () {
        return array("2", route('2'));
    }]);
});

// 路由中输出视图
Route::get('/', function () {
    return view('welcome');
});

// 代码中会使用到
Route::get('member/info', 'MemberController@info');

//返回route的url
Route::get('member/info2', [
    'uses' => 'MemberController@info2',
    'as' => 'memberinfo2'
]);

//返回info3
Route::get('member/info3', [
    'uses' => 'MemberController@info3',
    'as' => 'memberinfo3'
]);


