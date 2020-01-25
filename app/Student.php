<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'student';

    public $primaryKey = 'id';

    //允许批量赋值
    public $fillable = array('name', 'age');

    //不允许批量赋值的
    public $guarded=array('id');

    //时间戳
    public $timestamps = true;

    //保存时间的时候
    public function getDateFormat()
    {
        return time();
    }

    //显示时间的时候
    public function asDateTime($value)
    {
        return $value;
    }


}
