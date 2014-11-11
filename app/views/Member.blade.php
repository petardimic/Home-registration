@extends('layouts.master')

@section('title')
@parent
:: Member
@stop

{{--Content--}}
@section('content')
<h1>Member</h1>

{{ Form::open(array('url' => 'member/'.$type, 'class' => 'form-horizontal')) }} 

    <div class="control-group {{{ $errors->has('number') ? 'error' : '' }}}">
        {{ Form::label('number', 'จำนวนสมาชิก', array('class' => 'control-label')) }}
        <div class="controls">
            {{ Form::text('number', Input::old('number')) }}
            {{ $errors->first('number') }}
        </div>
    </div>

	<!--Order No.-->
	<div class="control-group {{{ $errors->has('orderNo') ? 'error' : '' }}}">
        {{ Form::label('orderNo', 'Order No.', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('orderNo', Input::old('orderNo')) }}
            {{ $errors->first('orderNo') }}
        </div>
    </div>

    <!--Name-->
    <div class="control-group {{{ $errors->has('name') ? 'error' : '' }}}">
        {{ Form::label('name', 'Name', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('name', Input::old('name')) }}
            {{ $errors->first('name') }}
        </div>
    </div>

    <!--Nationality-->
    <div class="control-group {{{ $errors->has('nationality') ? 'error' : '' }}}">
        {{ Form::label('nationality', 'Nationality', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('nationality', Input::old('nationality')) }}
            {{ $errors->first('nationality') }}
        </div>
    </div>

    <!--gender-->
    <div class="control-group {{{ $errors->has('gender') ? 'error' : '' }}}">
        {{ Form::label('gender', 'Gender', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('gender', Input::old('gender')) }}
            {{ $errors->first('gender') }}
        </div>
    </div>

    <!--idNumber-->
    <div class="control-group {{{ $errors->has('idNumber') ? 'error' : '' }}}">
        {{ Form::label('idNumber', 'ID Number', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('idNumber', Input::old('idNumber')) }}
            {{ $errors->first('idNumber') }}
        </div>
    </div>

    <!--status-->
    <div class="control-group {{{ $errors->has('status') ? 'error' : '' }}}">
        {{ Form::label('status', 'Status', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('status', Input::old('status')) }}
            {{ $errors->first('status') }}
        </div>
    </div>

    <!--birthDate-->
    <div class="control-group {{{ $errors->has('birthDate') ? 'error' : '' }}}">
        {{ Form::label('birthDate', 'Birth Date', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('birthDate', Input::old('birthDate')) }}
            {{ $errors->first('birthDate') }}
        </div>
    </div>

    <!--fatherData-->
    <div class="control-group {{{ $errors->has('fatherData') ? 'error' : '' }}}">
        {{ Form::label('fatherData', 'Father Data', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('fatherData', Input::old('fatherData')) }}
            {{ $errors->first('fatherData') }}
        </div>
    </div>

    <!--motherData-->
    <div class="control-group {{{ $errors->has('motherData') ? 'error' : '' }}}">
        {{ Form::label('motherData', 'Mother Data', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('motherData', Input::old('motherData')) }}
            {{ $errors->first('motherData') }}
        </div>
    </div>

    <!--comeFrom-->
    <div class="control-group {{{ $errors->has('comeFrom') ? 'error' : '' }}}">
        {{ Form::label('comeFrom', 'Come From', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('comeFrom', Input::old('comeFrom')) }}
            {{ $errors->first('comeFrom') }}
        </div>
    </div>

    <!--goTo-->
    <div class="control-group {{{ $errors->has('goTo') ? 'error' : '' }}}">
        {{ Form::label('goTo', 'Go To', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('goTo', Input::old('goTo')) }}
            {{ $errors->first('goTo') }}
        </div>
    </div>

    <!-- Submit button -->
    <br></br>
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('ยอมรับ', array('class' => 'btn')) }}
        </div>
    </div>

    {{ Form::close() }}
@stop