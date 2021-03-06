<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        DB::table('student')->where('id', '>=', 6)->delete();
        // DB::table('student')->truncate();

    }

    //info7
    public function info7()
    {
        $count = DB::table('student')->count();
        print_r($count);
        $age = DB::table('student')->max('age');
        print_r("  ");
        print_r($age);
        $min = DB::table('student')->min('age');
        print_r("  ");
        print_r($min);
        $avg = DB::table('student')->avg('age');
        print_r("  ");
        print_r($avg);

    }

    //orm
    public function info8()
    {
        $student = Student::all();
        // dd($student);

        $every = Student::find(5);
        // dd($every);

        $get = Student::get();
        // dd($get);

        $info = Student::where('id', '>=', '5')->orderBy('age', 'desc')->first();
        // dd(count($info));

        Student::chunk(2, function ($chunk) {
            // dd($chunk);
        });

        $count = Student::count();
        // dd($count);


    }

    public function info9()
    {
        //批量新增
        $stu = Student::create([
            'name' => 'li',
            'age' => 20
        ]);
    }

    public function info10()
    {
        //如果没有就新增 有的话不变化
        $stu = Student::firstOrCreate(
            ['name' => 'info10']
        );
    }

    public function info11()
    {
        //如果没有就新增 有的话不变化
        $stu = Student::firstOrNew(
            ['name' => 'info11']
        );
        $stu->save();
    }

    public function info12()
    {
        $arr = 'sean';

        $num = array(5, 6, 7);
        return view('student.stu', [
            'name' => $arr,
            'num' => $num
        ]);
    }

    public function info13()
    {
        return view('student.stu3');
    }

    public function info14(Request $request)
    {
        //取值
        $name = $request->input('name');

        $all = $request->all();
        // print_r($all);

        $method = $request->method();
        // print_r($method);

        $isMethod = $request->isMethod('GET');
        // print_r($isMethod);

        $ajax = $request->ajax();

        $is = $request->is('student/*');
        // print_r($is);

        $url = $request->url();
        // print_r($url);

    }

    public function info15(Request $request)
    {
        $request->session()->put('key', 'value');

        session()->put('key2','value2');

        Session::put('key3','value3');

        Session::push('key4','value4');

        //生效一次
        Session::flash('key7','value7');
    }

    public function info16(Request $request)
    {
        $session = $request->session()->get('key');
        // print_r($session);

        $value2=session()->get('key2');
        // print_r($value2);

        $value3=Session::get('key3');
        // print_r($value3);

        $value4=Session::get('key4');
        // print_r($value4);

        //取出并且进行删除
        // $value5=Session::pull('key4');
        // print_r($value5);

        if(Session::has('key4')){
            echo "key4";
        }

        //删除
        Session::forget('key4');
        //删除所有
        Session::flush();
        //所有信息
        Session::all();

        Session::get('key7');

    }

    public function info17(Request $request)
    {
        $data=array('a','b','c');

        $data=response()->json($data);

        // return $data;

        // return redirect('student/info7');
        // return redirect()->action('StudentController@info7');
        // return redirect()->route('studentinfo7');
        // return redirect()->back();
    }

    public function act0()
    {
        return '活动快要开始了';
    }

    public function act1()
    {
        return '进行中1';
    }

    public function act2()
    {
        return '进行中2';
    }
}
