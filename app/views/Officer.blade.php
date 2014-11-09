@extends('layouts.master')

@section('title')
@parent
:: Officer
@stop

{{-- Content --}}
@section('content')

<div class="page-header">
    <h1><font color="0000AA">User Petition</font></h1>
</div>
<div>
	
	<?php
	$pet = petition::all();
    $user = user::all();
	 ?>
		@if($pet != null)
		<p><B>Petition Table</B></p>
		<table style="width:100%">
  			<tr>
    			<th>Name</th>
    			<th>Type</th>
    			<th>Data</th>
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
    				<td> <?php echo User::find(petition::find($print->id)->name)->name?> </td>
    				<td> <?php echo $ty ?> </td>
    				<td> <?php echo $print->textPetition ?> </td>
                    @if($print->type == 1)
                        <!-- <td> {{ HTML::link('homeregis/'.$print->name, 'ดำเนินการ') }} </td> -->
                    @elseif($print->type == 2) 
                        <td> {{ HTML::link('homeregis/'.$print->name, 'ดำเนินการ') }} </td>
                    @elseif($print->type == 3) 
                        <!--<td> {{ HTML::link('homeregis/'.$print->name, 'ดำเนินการ') }} </td>-->
                    @elseif($print->type == 4)
                        <!--<td> {{ HTML::link('homeregis/'.$print->name, 'ดำเนินการ') }} </td>-->
                    @endif 
    			</tr>
    			@endforeach
		</table>
	@else
		<?php echo "Petition Table is empty."; ?>
	@endif
</div>
@stop