@extends('layouts.master')

@section('title')
@parent
:: Delete
@stop

{{-- Content --}}
@section('content')

{{ Form::open(array('url' => 'deleteR', 'class' => 'form-horizontal')) }}

<?php
	$pet = petition::all();
	$user = user::all();
?>

	@if($pet != null)
		<table style="width:100%">
  			<tr>
    			<th>ชื่อผู้ส่งคำร้อง</th>
                <th>ชนิดคำร้อง</th>
                <th>รายละเอียด</th>
  			</tr>
 				@foreach($pet as $print)
 				<?php
 					$ty = "";
 					if($print->type == 1) $ty ="ย้ายที่อยู่";
 					else if($print->type == 2) $ty = "ขอทะเบียนบ้านใหม่";
 					else if($print->type == 3) $ty = "เปลี่ยนเจ้าของที่อยู่";
 					else if($print->type == 4 )$ty = "เปลี่ยนแปลงข้อมูลผู้อาศัย";
                    else $ty = "ตั้งค่าเป็นที่อยู่ปัจจุบัน";
 				?>
 				<tr>
    				<td> <?php echo User::find(petition::find($print->id)->name)->name?> </td>
    				<td> <?php echo $ty ?> </td>
    				<td> <?php echo $print->textPetition ?> </td>
    				<td><!-- Delete button -->
    					<div class="control-group">
        					<div class="controls">
            					{{ Form::submit('ลบ', array('class' => 'btn btn-warning')) }}
        					</div>
    					</div>
    				</td>
    			</tr>
    			<br>
    			@endforeach
    @endif


{{ Form::close() }}

@stop