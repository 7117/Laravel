<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function info()
    {
        return view('member-info');
    }

    public function info2()
    {
        return route('memberinfo2');
    }

    public function info3()
    {
        return view('member/info3', [
            'id' => '我是1岁',
            'age' => '20岁'
        ]);
    }
}
