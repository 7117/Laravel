@extends('layouts')

@section('header')
    {{--    继承原来的--}}
    @parent
    sidebar
@stop


@section('content')
    <p>{{$name}}</p>
    <p>{{time()}}</p>
    <p>{{isset($info)?'aaa':'bbb'}}</p>
    <p>@{{isset($info)?'aaa':'bbb'}}</p>
    {{--这种模板注释看不到信息--}}
    @include('student.stu2',[
        'message'=>'woshistu2'
    ])

    @if($name='sean')
        i am sean
    @elseif($name='aa')
        i am aa
    @else
        i am ss
    @endif

    @for($i=1;$i<3;$i++)
        <p>{{$i}}</p>
    @endfor

    @foreach($num as $k=>$v)
        <p>{{$v}}</p>
    @endforeach

@stop


