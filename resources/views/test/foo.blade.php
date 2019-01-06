@extends('layouts.master')

@section('style')
    <link href="../../../public/css/admin.css" rel="stylesheet">
@endsection

@section('header')

    <title> ثبت گروه </title>
@endsection


@section('content')
    <div class="group">
        <div class="box_title">
            <title> افزودن دسته</title>
        </div>


        {!! Form::open(['url' => '/admin/category','files'=>'true']) !!}
        {{-- files'=>'true = enable null pic--}}


        <div class="form-group">
            {!! Form::label('cat_name' , 'نام دسته:')!!}
            {!! Form::text('cat_name' , null,['class' => 'form-control']) !!}
            @if($errors->has('cat_name'))
                <span style="color:#ff4a46;">{{$errors->first('cat_name')}}</span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('cat_ename' , 'نام لاتین دسته:')!!}
            {!! Form::text('cat_ename' ,null,[ 'class' => 'form-control']) !!}
            @if($errors->has('cat_ename'))
                <span style="color:#ff4a46;">{{$errors->first('cat_ename')}}</span>
            @endif

        </div>



        <br>
        <div class="form-group">
            <input type="file" name="pic" id="pic" onchange="loadFile(event)" style="display: none">
            {!! Form::label('pic' , 'انتخاب تصویر :  ')!!}
            <img onclick="select_file()"  id="output" src="{{ url('images/noSelection.png') }}" height="20%" width="20%">
        </div>
        <div class="form-group">
            @if($errors->has('pic'))
                <span style="color:#ff4a46;">{{$errors->first('pic')}}</span>
            @endif
        </div>
        <br>

        <div class="form-group">
            {!! Form::submit('ثبت' ,['class' =>'btn btn-success']) !!}
        </div>



        {!! Form::close() !!}
    </div>
@endsection

@section('footer')
    <script type="text/javascript" src="{{ url('js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/defaults-fa_IR.js') }}"></script>
    <script>
        select_file=function()
        {
            document.getElementById('pic').click();
        }
        loadFile=function (event)
        {
            var render=new FileReader();
            render.onload=function()
            {
                var output=document.getElementById('output');
                output.src=render.result;
            };
            render.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection