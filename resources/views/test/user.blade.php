@extends('layouts.master')

@section('style')
    <link href="../../../public/css/admin.css" rel="stylesheet">
@endsection

@section('header')

    <title> ثبت کاربر </title>
@endsection


@section('content')
    <div class="group">
        <div class="box_title">
            <title> افزودن کاربر</title>
        </div>


        {!! Form::open(['url' => '/admin/category/userStore']) !!}


        <div class="form-group">
            {!! Form::label('name' , 'نام :')!!}
            {!! Form::text('name' , null ,['class' => 'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('email' , 'نام ایمیل:')!!}
            {!! Form::text('email' , null,[ 'class' => 'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('password' , 'رمز عبور:')!!}
            {!! Form::text('password' , null,[ 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت' ,['class' =>'btn btn-success']) !!}
        </div>


        {!! Form::close() !!}
    </div>
@endsection

@section('footer')
    <script type="text/javascript" src="{{ url('js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/defaults-fa_IR.js') }}"></script>
@endsection