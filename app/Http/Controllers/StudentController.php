<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //原始sql
    public function info5()
    {
        $students = DB::select('select * from student');

        DB::insert("insert into student (id,name,age,sex) values (?,?,?,?)", ['2', '猪八戒', 20, 50]);

        DB::update("update student set name=? where id=?", ['唐僧', 2]);

        DB::delete("delete from student where id=?", [2]);
    }

    //查询构建器
    public function info6()
    {
        //增加
        // $bool = DB::table('student')->insert(['id' => '2', 'name' => '沙僧']);

        // $id = DB::table('student')->insertGetId(
        //     ['id' => '6', 'name' => '沙僧']);

        //更新
        // DB::table('student')->where('id',6)->update(['age'=>50]);

        //自增
        // $num = DB::table('student')->increment('age');
        // $num = DB::table('student')->decrement('age',3);
        // print_r($num);

        //删除
        DB::table('student')->where('id','>=',6)->delete();
        // DB::table('student')->truncate();

    }

    //info7
    public function info7()
    {
        $count=DB::table('student')->count();
        print_r($count);
        $age=DB::table('student')->max('age');
        print_r("  ");
        print_r($age);
        $min=DB::table('student')->min('age');
        print_r("  ");
        print_r($min);
        $avg=DB::table('student')->avg('age');
        print_r("  ");
        print_r($avg);

    }

    

}
