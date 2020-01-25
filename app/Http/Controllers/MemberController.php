<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function info(){
        return "info";
    }

    public function info2(){
        return route('memberinfo2');
    }
}
