@extends('layouts.master')

@section('title')
@parent
:: Profile
@stop

@section('content')
<h1><font color="79CDCD">Profile</font></h1>
<p>
	<B>
	<?php	
		$users = User::find(Auth::id());
		echo "Name : ";
	?>
	</B>
	<?php
		echo $users->name;
		echo " ";
		echo $users->surname;
	?>
	<br><B>
	<?php
		echo "ID Number : ";
	?>
	</B>
	<?php
		echo $users->idcard;
	?>
	<br><B>
	<?php
		echo "E-mail : "; 
	?>
	</B>
	<?php
		echo $users->email;
	?>
		<br></br>
</p>
@stop