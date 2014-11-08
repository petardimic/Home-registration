@extends('layouts.master')

@section('title')
@parent
:: Petition
@stop

{{-- Content --}}
@section('content')
<h1><font color="79CDCD">Petition</font></h1>

{{ Form::open(array('url' => 'petition/'.$type.'/'.$id_increment, 'class' => 'form-horizontal')) }}


    <!-- Text Petition -->
    <div class="control-group {{{ $errors->has('textPetition') ? 'error' : '' }}}">
        {{ Form::label('textPetition', 'Text Petition', array('class' => 'control-label')) }}

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