@extends('layouts.master')

@section('title')
@parent
:: CurrentAddr
@stop


@section('content')
	<br></br>
{{ Form::open(array('url' => 'currentAddr/'.$id_users.'/'.$id_homes, 'class' => 'form-horizontal')) }}
<?php $user = User::find(Auth::id()); ?>
@if($user->permission == "User")
	<h4><font color="77777">ส่งข้อมูลเรียบร้อย</font></h4>
@else 
	<h4><font color="77777">ดำเนินการเสร็จสิ้น</font></h4>
@endif
	 <div class="control-group">
        <div class="controls">
            {{ Form::submit('กลับ', array('class' => 'btn')) }}
        </div>
    </div>
{{ Form::close() }}
@stop
