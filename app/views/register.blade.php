@extends('layouts.master')

@section('title')
@parent
:: Register
@stop


{{-- Content --}}
@section('content')
<div class="page-header">
    <h1><font color="79CDCD">ลงทะเบียน</font></h1>
</div>

{{ Form::open(array('url' => 'register', 'class' => 'form-horizontal')) }}

    <!-- Userame -->
    <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
        {{ Form::label('username', 'ชื่อผู้ใช้', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('username', Input::old('username')) }}
            {{ $errors->first('username') }}
        </div>
    </div>

    <!-- Password -->
    <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
        {{ Form::label('password', 'รหัสผ่าน', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </div>
    </div>

    <!-- Name -->
    <div class="control-group {{{ $errors->has('name') ? 'error' : '' }}}">
        {{ Form::label('name', 'ชื่อ', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('name', Input::old('name')) }}
            {{ $errors->first('name') }}
        </div>
    </div>

    <!-- SurName -->
    <div class="control-group {{{ $errors->has('surname') ? 'error' : '' }}}">
        {{ Form::label('surname', 'นามสกุล', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('surname', Input::old('surname')) }}
            {{ $errors->first('surname') }}
        </div>
    </div>

    <!-- ID-card -->
    <div class="control-group {{{ $errors->has('idcard') ? 'error' : '' }}}">
        {{ Form::label('idcard', 'เลขบัตรประจำตัวประชาชน', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('idcard', Input::old('idcard')) }}
            {{ $errors->first('idcard') }}
        </div>
    </div>
    
    <!-- Email -->
    <div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
        {{ Form::label('email', 'อีเมล', array('class' => 'control-label')) }}

         <div class="controls">
            {{ Form::text('email', Input::old('email')) }}
            {{ $errors->first('email') }}
        </div>
    </div>

    <!-- Submit button -->
    <br>
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('ลงทะเบียน', array('class' => 'btn')) }}
        </div>
    </div>
    {{ Form::close() }}
@stop