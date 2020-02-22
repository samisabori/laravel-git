@extends('layouts.admin.master')
@section('content')
<h3>ثبت نام کاربر جدید</h3>
@include('partials.form-errors')
<div class="col-md-6 offset-md-3">
    {!! Form::open(['method' => 'POST' , 'action'=>'Admin\AdminUserController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','نام و نام خانوادگی:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','ایمیل:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('roles','نقش:') !!}
        {!! Form::select('roles[]',$roles,null,['multiple'=>'multiple','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','وضعیت:') !!}
        {!! Form::select('status',[1 =>'فعال', 0=>'غیر فعال'],0,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('avatar','تصویر پروفایل:') !!}
        {!! Form::file('avatar',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','رمز:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('ذخیره',['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
</div>



@endsection
