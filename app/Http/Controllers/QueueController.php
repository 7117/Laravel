<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Mail;

class QueueController extends Controller
{
    public function queue(Request $request)
    {
        $a=dispatch(new SendEmail("862890248@qq.com"));
        var_dump($a);
    }
}
