@extends('layouts.master')

@section('title')
@parent
:: HomeRegis
@stop

{{--Content--}}
@section('content')
<h1>HomeRegis</h1>

{{ Form::open(array('url' => 'homeregis/'.$id, 'class' => 'form-horizontal')) }}
	<!--Book No.-->
	<div class="control-group {{{ $errors->has('bookNo') ? 'error' : '' }}}">
        {{ Form::label('bookNo', 'Book No.', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('bookNo', Input::old('bookNo')) }}
            {{ $errors->first('bookNo') }}
        </div>
    </div>

    <!--Home Code-->
    <div class="control-group {{{ $errors->has('homeCode') ? 'error' : '' }}}">
        {{ Form::label('homeCode', 'Home Code', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('homeCode', Input::old('homeCode')) }}
            {{ $errors->first('homeCode') }}
        </div>
    </div>

    <!--RegOffice-->
    <div class="control-group {{{ $errors->has('regOffice') ? 'error' : '' }}}">
        {{ Form::label('regOffice', 'RegOffice', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('regOffice', Input::old('regOffice')) }}
            {{ $errors->first('regOffice') }}
        </div>
    </div>

    <!--address-->
    <div class="control-group {{{ $errors->has('address') ? 'error' : '' }}}">
        {{ Form::label('address', 'Address', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('address', Input::old('address')) }}
            {{ $errors->first('address') }}
        </div>
    </div>

    <!--villageName-->
    <div class="control-group {{{ $errors->has('villageName') ? 'error' : '' }}}">
        {{ Form::label('villageName', 'Village Name', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('villageName', Input::old('villageName')) }}
            {{ $errors->first('villageName') }}
        </div>
    </div>

    <!--homeName-->
    <div class="control-group {{{ $errors->has('homeName') ? 'error' : '' }}}">
        {{ Form::label('homeName', 'Home Name', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('homeName', Input::old('homeName')) }}
            {{ $errors->first('homeName') }}
        </div>
    </div>

    <!--homeType-->
    <div class="control-group {{{ $errors->has('homeType') ? 'error' : '' }}}">
        {{ Form::label('homeType', 'Home Type', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('homeType', Input::old('homeType')) }}
            {{ $errors->first('homeType') }}
        </div>
    </div>

    <!--buildingType-->
    <div class="control-group {{{ $errors->has('buildingType') ? 'error' : '' }}}">
        {{ Form::label('buildingType', 'Building Type', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('buildingType', Input::old('buildingType')) }}
            {{ $errors->first('buildingType') }}
        </div>
    </div>

    <!--dateAssignAddr-->
    <div class="control-group {{{ $errors->has('dateAssignAddr') ? 'error' : '' }}}">
        {{ Form::label('dateAssignAddr', 'Date Assign Address/วันที่ดำเนินการขอที่อยู่', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('dateAssignAddr', Input::old('dateAssignAddr')) }}
            {{ $errors->first('dateAssignAddr') }}
        </div>
    </div>

    <!--registrar-->
    <div class="control-group {{{ $errors->has('registrar') ? 'error' : '' }}}">
        {{ Form::label('registrar', 'Registrar', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('registrar', Input::old('registrar')) }}
            {{ $errors->first('registrar') }}
        </div>
    </div>

    <!--typingDate-->
    <div class="control-group {{{ $errors->has('typingDate') ? 'error' : '' }}}">
        {{ Form::label('typingDate', 'Typing Date', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('typingDate', Input::old('typingDate')) }}
            {{ $errors->first('typingDate') }}
        </div>
    </div>

    <!-- Submit button -->
    <br></br>
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('OK', array('class' => 'btn')) }}
        </div>
    </div>
    {{ Form::close() }}
@stop