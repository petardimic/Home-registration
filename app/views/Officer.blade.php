@extends('layouts.master')

@section('title')
@parent
:: Officer
@stop

{{-- Content --}}
@section('content')

<div class="page-header">
    <h2>Officer</h2>
</div>
<div>
	
	<?php

	$pet = petition::all();
	 ?>
		@if($pet != null)
		<p><B>Petition Table</B></p>
		<table style="width:100%">
  			<tr>
    			<th>Name</th>
    			<th>Data</th>
    			<th>Type</th>
  			</tr>
 				@foreach($pet as $print)
 				<?php
 					$ty = "";
 					if($print->type == 1) $ty ="ย้ายที่อยู่";
 					else if($print->type == 2) $ty = "ขอทะเบียนบ้านใหม่";
 					else if($print->type == 3) $ty = "เปลี่ยนเจ้าของที่อยู่";
 					else $ty = "เปลี่ยนแปลงข้อมูลผู้อาศัย";
 				?>
 				<tr>
    				<td> <?php echo $print->name ?> </td>
    				<td> <?php echo $print->textPetition ?> </td>
    				<td> <?php echo $ty ?> </td>
    				<td> {{ HTML::link('homeregis/'.$print->id, 'ดำเนินการ') }} </td>
    			</tr>
    			@endforeach
		</table>
	@else
		<?php echo "Petition Table is empty."; ?>
	@endif
</div>
@stop