@extends('layouts.master')

@section('title')
@parent
:: MoveHaveHome
@stop

@section('content')
<div class="page-header">
<h1><font color="79CDCD">ย้ายไปยังที่อยู่ที่มีอยู่แล้ว</font></h1>
</div>
{{ Form::open(array('url' => 'movehavehome/'.$type.'/'.$id_increment, 'class' => 'form-horizontal')) }}
	<div>
		
	</div>
{{ Form::close() }}
@stop