@extends('layouts.master')

@section('title')
@parent
:: ChangeOwner
@stop

@section('content')
<div class="page-header">
<h1><font color="79CDCD">เปลี่ยนเจ้าของที่อยู่</font></h1>
</div>

{{ Form::open(array('url' => 'changeOwner/'.$type.'/'.$id_increment, 'class' => 'form-horizontal')) }}
	<div>
	</div>
{{ Form::close() }}
@stop