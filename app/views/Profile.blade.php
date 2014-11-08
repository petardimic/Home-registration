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


	@if($users->permission == "Admin")
    	<div class="control-group">
        	<div class="controls">
            	{{ HTML::link('register', 'AddOfficer') }}
        	</div>
    	</div>
    @elseif($users->permission == "Officer")
    	<div class="control-group">
        	<div class="controls">
            	{{ HTML::link('petition', 'ดูคำร้อง') }}
        	</div>
    	</div>
    @else
    	<div class="control-group">
        	<div class="controls">

            	{{ HTML::link('petition/1', 'ส่งคำร้องขอย้ายที่อยู่') }}
            	<br>
            	{{ HTML::link('petition/2', 'ส่งคำร้องขอทะเบียนบ้านใหม่') }}
            	<br>
            	{{ HTML::link('petition/3', 'ส่งคำร้องขอเปลี่ยนเจ้าของที่อยู่') }}
            	<br>
            	{{ HTML::link('petition/4', 'ส่งคำร้องขอเปลี่ยนแปลงข้อมูลผู้อยู่อาศัย') }}
        	</div>
    	</div>
	@endif
</p>
@stop