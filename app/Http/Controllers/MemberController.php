<?php

namespace App\Http\Controllers;

use App\Member;

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

    public function info4()
    {
        $member = new Member();
        $info = $member->getMember();
        print_r($info);
        die();
    }

}
