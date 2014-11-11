@extends('layouts.master')

@section('title')
@parent
:: Move
@stop

@section('content')
<div class="page-header">
<h1><font color="79CDCD">ย้ายที่อยู่</font></h1>
</div>

{{ Form::open(array('url' => 'move/'.$type.'/'.$id_increment, 'class' => 'form-horizontal')) }}
	<div>
		{{ HTML::link('petition/1/'.$id_increment, 'ย้ายที่อยู่ไปยังทะเบียนบ้านใหม่',array('class' => 'btn btn-primary')) }}
		{{ HTML::link('movehavehome/1/'.$id_increment, 'ย้ายไปยังที่อยู่ที่มีอยู่แล้ว',array('class' => 'btn btn-info')) }}
	</div>
{{ Form::close() }}
@stop