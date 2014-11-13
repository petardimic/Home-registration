@extends('layouts.master')

@section('title')
@parent
:: Delete
@stop

{{-- Content --}}
@section('content')

{{ Form::open(array('url' => 'deleteR', 'class' => 'form-horizontal')) }}

{{ Form::close() }}

@stop