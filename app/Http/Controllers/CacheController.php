<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function cache1(Request $request)
    {
        Cache::put('key1','val1',10);
        Cache::add('key2','val2',10);
        Cache::forever('key3','val3');
        Cache::has('key1');
    }

    public function cache2(Request $request)
    {
        $value=Cache::get('key1');

        //获取之后赋值  然后进行删除
        $value2=Cache::pull('key1');

        // 删除forget
        $value3=Cache::forget('key1');
    }
}
