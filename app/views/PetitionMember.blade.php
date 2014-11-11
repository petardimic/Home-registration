@extends('layouts.master')

@section('title')
@parent
:: PetitionMember
@stop

{{-- Content --}}
@section('content')
<h1><font color="79CDCD">Member Petition</font></h1>


{{ Form::open(array('url' => 'petitionMember/'.$type.'/'.$id_increment, 'class' => 'form-horizontal')) }}

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
            {{ Form::submit('ส่งคำร้อง', array('class' => 'btn btn-primary')) }}
            {{ HTML::link('profile','เสร็จสิ้น', array('class' => 'btn btn-link','class' => 'btn btn-primary'))}}
        </div>
    </div>
    <br></br>
    <p><B>ส่งคำร้อง 1 ครั้งต่อสมาชิก 1 คน</p>
{{ Form::close() }}
@stop