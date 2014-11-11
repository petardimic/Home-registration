@extends('layouts.master')

@section('title')
@parent
:: Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
    <h1><font color="79CDCD">เข้าสู่ระบบ</font></h1>
</div>

{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}

    <!-- Name -->
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

    <!-- Login button -->
    <br></br>
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('เข้าสู่ระบบ', array('class' => 'btn btn-primary')) }}
            {{ HTML::link('register', 'ลงทะเบียน',array('class' => 'btn btn-success')) }}
        </div>
    </div>


{{ Form::close() }}
@stop