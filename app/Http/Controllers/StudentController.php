<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function info5()
    {
        $students = DB::select('select * from student');

        // DB::insert("insert into student (id,name,age,sex) values (?,?,?,?)", ['2', '猪八戒', 20, 50]);

        DB::update("update student set name=? where id=?", ['唐僧', 2]);

        DB::delete("delete from student where id=?", [2]);
    }
}
