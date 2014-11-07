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
		echo "Address : ";
	?>
	</B>
	<?php
		echo $users->address;
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
	@if(Auth::id() == 1)
    	<div class="control-group">
        	<div class="controls">
            	{{ HTML::link('register', 'AddOfficer') }}
        	</div>
    	</div>
    @else 
    	<div class="control-group">
        	<div class="controls">
            	{{ HTML::link('homeregis', 'Add Home') }}
            	<br>
            	{{ HTML::link('member', 'Add Member') }}
            	<!-- Move -->
            	<!-- Change Owner -->
        	</div>
    	</div>

	@endif
</p>
@stop