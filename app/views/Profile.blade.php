@extends('layouts.master')

@section('title')
@parent
:: Profile
@stop

@section('content')
<div class="page-header">
<h1><font color="79CDCD">บัญชีผู้ใช้</font></h1>
</div>
<p>
	<B>
	<?php	

		$users = User::find(Auth::id());
		echo "ชื่อ : ";
	?>
	</B>
	<?php
		echo $users->name;
		echo " ";
		echo $users->surname;
	?>
	<br><B>
	<?php
		echo "เลขประจำตัวประชาชน : ";
	?>
	</B>
	<?php
		echo $users->idcard;
	?>
	<br><B>
	<?php
		echo "อีเมล : "; 
	?>
	</B>
	<?php
		echo $users->email;
		$homeUser = HomeRegis::all();
		$homeRole = HomeProData::all();
	?>
		<br></br>

	@if($users->permission == "Admin")
    	<div class="control-group">
        	<div class="controls">
            	{{ HTML::link('register', 'เพิ่มเจ้าหน้าที่ในระบบ') }}
        	</div>
    	</div>
    @elseif($users->permission == "Officer")
    	<div class="control-group">
        	<div class="controls">
            	{{ HTML::link('officer', 'ดูคำร้อง') }}
        	</div>
    	</div>
    @else
    	<div class="control-group">
        	<div class="controls">
        		<p><B>รายการที่อยู่</B></p>
				<table style="width:100%">
					<tr>
						<th>ชื่อ-นามสกุล</th>
    					<th>ที่อยู่</th>
					</tr>
					@foreach($homeRole as $print)
					<tr>
						@if((HomeProData::find($print->id)->user_id == $users->id) && (HomeProData::find($print->id)->home_regis_id == HomeRegis::find(HomeProData::find($print->id)->home_regis_id)->id))
							<td><?php echo $users->name." ".$users->surname; ?></td>
							<td><?php echo HomeRegis::find(HomeProData::find($print->id)->home_regis_id)->address; ?></td>
						@endif
					</tr>
    				@endforeach
				</table>
				<div class="page-header">
				</div>
            	{{ HTML::link('move/1/'.$users->id, 'ส่งคำร้องขอย้ายที่อยู่',array('class' => 'btn btn-primary')) }}
 
            	{{ HTML::link('petition/2/'.$users->id, 'ส่งคำร้องขอทะเบียนบ้านใหม่',array('class' => 'btn btn-info')) }}
            	
            	{{ HTML::link('changeOwner/3/'.$users->id, 'ส่งคำร้องขอเปลี่ยนเจ้าของที่อยู่',array('class' => 'btn btn-primary')) }}
            	
            	{{ HTML::link('petition/4/'.$users->id, 'ส่งคำร้องขอเปลี่ยนแปลงข้อมูลผู้อยู่อาศัย',array('class' => 'btn btn-info')) }}
        	</div>
    	</div>
	@endif
</p>
@stop