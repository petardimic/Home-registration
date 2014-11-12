@extends('layouts.master')

@section('title')
@parent
:: CurrentAddr
@stop


@section('content')
	<br></br>
	<h4><font color="77777">ตั้งค่าเรียบร้อย</font></h4>
{{ Form::open(array('url' => 'currentAddr/'.$id_users.'/'.$id_homes, 'class' => 'form-horizontal')) }}
	 <div class="control-group">
        <div class="controls">
            {{ Form::submit('กลับ', array('class' => 'btn')) }}
        </div>
    </div>
{{ Form::close() }}
@stop
