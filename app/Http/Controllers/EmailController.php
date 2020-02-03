<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function email(Request $request)
    {
        Mail::raw('邮件内容',function ($message){
            $message->from('jimsun7117@163.com','email function');
            $message->subject("主题");
            $message->to("862890248@qq.com");
        });
    }

    public function email2(Request $request)
    {
        Mail::send("email.email",['name'=>'email2'],function ($message){
            $message->from('jimsun7117@163.com','email function');
            $message->subject("主题");
            $message->to("862890248@qq.com");
        });
    }


}
