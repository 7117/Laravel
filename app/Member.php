<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function getMember()
    {
        return 'mid:100';
    }
}
