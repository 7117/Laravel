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

//返回info4
Route::get('member/info4', [
    'uses' => 'MemberController@info4',
    'as' => 'memberinfo4'
]);


//返回原始的sql
Route::get('student/info5', [
    'uses' => 'StudentController@info5',
    'as' => 'studentinfo5'
]);

Route::get('student/info6', [
    'uses' => 'StudentController@info6',
    'as' => 'studentinfo6'
]);

//聚合函数
Route::get('student/info7', [
    'uses' => 'StudentController@info7',
    'as' => 'studentinfo7'
]);

//聚合函数
Route::get('student/info8', [
    'uses' => 'StudentController@info8',
    'as' => 'studentinfo8'
]);

Route::get('student/info9', [
    'uses' => 'StudentController@info9',
    'as' => 'studentinfo9'
]);

Route::get('student/info10', [
    'uses' => 'StudentController@info10',
    'as' => 'studentinfo10'
]);

Route::get('student/info11', [
    'uses' => 'StudentController@info11',
    'as' => 'studentinfo11'
]);

Route::get('student/info12', [
    'uses' => 'StudentController@info12',
    'as' => 'studentinfo12'
]);

Route::get('student/info13', [
    'uses' => 'StudentController@info13',
    'as' => 'info13'
]);

Route::get('student/info14', [
    'uses' => 'StudentController@info14',
    'as' => 'info14'
]);


Route::group(
    ['middleware' => ['web']],
    function () {
        Route::get('student/info15', [
            'uses' => 'StudentController@info15',
            'as' => 'info15'
        ]);
        Route::get('student/info16', [
            'uses' => 'StudentController@info16',
            'as' => 'info16'
        ]);
    }
);

Route::get('student/info17', [
    'uses' => 'StudentController@info17',
    'as' => 'info17'
]);


//宣传
Route::get('student/act0', [
    'uses' => 'StudentController@act0',
    'as' => 'act0'
]);

//活动中
Route::group(
    ['middleware' => ['act']],
    function () {
        Route::get('student/act1', [
            'uses' => 'StudentController@act1',
            'as' => 'act1'
        ]);

        Route::get('student/act2', [
            'uses' => 'StudentController@act2',
            'as' => 'act2'
        ]);
    }
);
