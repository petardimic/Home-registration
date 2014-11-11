@extends('layouts.master')

@section('title')
@parent
:: Petition
@stop

{{-- Content --}}
@section('content')
<h1><font color="79CDCD">Petition</font></h1>

{{ Form::open(array('url' => 'petition/'.$type.'/'.$id_increment, 'class' => 'form-horizontal')) }}

    @if($type == 4)
    <div class="control-group {{{ $errors->has('number') ? 'error' : '' }}}">
        {{ Form::label('number', 'จำนวนสมาชิก', array('class' => 'control-label')) }}
        <div class="controls">
            {{ Form::text('number', Input::old('number')) }}
            {{ $errors->first('number') }}
        </div>
    </div>
    @endif

    <!-- Text Petition -->
    <div class="control-group {{{ $errors->has('textPetition') ? 'error' : '' }}}">
        {{ Form::label('textPetition', 'Detail', array('class' => 'control-label')) }}
        <div class="controls">
            <textarea name = "textPetition" rows="10" cols="50" ></textarea>
        </div>
    </div>

    <br>
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('ส่งคำร้อง', array('class' => 'btn')) }}
        </div>
    </div>

{{ Form::close() }}
@stop