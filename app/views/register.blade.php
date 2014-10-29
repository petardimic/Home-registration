@extends('layouts.master')

@section('title')
@parent
:: Register
@stop


{{-- Content --}}
@section('content')
<div class="page-header">
    <h2>Register</h2>
</div>

{{ Form::open(array('url' => 'register', 'class' => 'form-horizontal')) }}

    <!-- Userame -->
    <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
        {{ Form::label('username', 'Username', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('username', Input::old('username')) }}
            {{ $errors->first('username') }}
        </div>
    </div>

    <!-- Password -->
    <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
        {{ Form::label('password', 'Password', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </div>
    </div>

    <!-- Name -->
    <div class="control-group {{{ $errors->has('name') ? 'error' : '' }}}">
        {{ Form::label('name', 'Name', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('name', Input::old('name')) }}
            {{ $errors->first('name') }}
        </div>
    </div>

    <!-- SurName -->
    <div class="control-group {{{ $errors->has('surname') ? 'error' : '' }}}">
        {{ Form::label('surname', 'Surname', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('surname', Input::old('surname')) }}
            {{ $errors->first('surname') }}
        </div>
    </div>

    <!-- ID-card -->
    <div class="control-group {{{ $errors->has('idcard') ? 'error' : '' }}}">
        {{ Form::label('idcard', 'ID Number', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('idcard', Input::old('idcard')) }}
            {{ $errors->first('idcard') }}
        </div>
    </div>

    <!-- Email -->
    <div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
        {{ Form::label('email', 'E-mail', array('class' => 'control-label')) }}

         <div class="controls">
            {{ Form::text('email', Input::old('email')) }}
            {{ $errors->first('email') }}
        </div>
    </div>

    <!-- Submit button -->
    <br></br>
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </div>
    </div>
    {{ Form::close() }}
@stop