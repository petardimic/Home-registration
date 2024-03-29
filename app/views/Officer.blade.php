@extends('layouts.master')

@section('title')
@parent
:: Officer
@stop

{{-- Content --}}
@section('content')

<div class="page-header">
    <h1><font color="79CDCD">คำร้อง</font></h1>
</div>
<div>
	
	<?php
	   $pet = petition::all();
       $user = user::all();
	 ?>
		@if($pet != null)
		<p><B>คำร้องทั้งหมด</B></p>
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
                    @if($print->type == 1)
                        <td> {{ HTML::link('homeregis/'.$print->id, 'ดำเนินการ',array('class' => 'btn btn-info')) }} </td>
                        <td> {{ HTML::link('deleteRecord/'.$print->id, 'ลบ',array('class' => 'btn btn-warning')) }} </td>
                    @elseif($print->type == 2) 
                        <td> {{ HTML::link('homeregis/'.$print->id, 'ดำเนินการ',array('class' => 'btn btn-info')) }} </td>
                        <td> {{ HTML::link('deleteRecord/'.$print->id, 'ลบ',array('class' => 'btn btn-warning')) }} </td>
                    @elseif($print->type == 3) 
                        <td> {{ HTML::link('homeregis/'.$print->id, 'ดำเนินการ',array('class' => 'btn btn-info')) }} </td>
                        <td> {{ HTML::link('deleteRecord/'.$print->id, 'ลบ',array('class' => 'btn btn-warning')) }} </td>
                    @elseif($print->type == 4)
                        <td> {{ HTML::link('member/'.$print->name, 'ดำเนินการ',array('class' => 'btn btn-info')) }} </td>
                        <td> {{ HTML::link('deleteRecord/'.$print->id, 'ลบ',array('class' => 'btn btn-warning')) }} </td>
                    @else
                        <td> {{ HTML::link('currentAddr/'.$print->id.'/'.$print->name.'/'.$print->home, 'ดำเนินการ',array('class' => 'btn btn-info')) }} </td>
                        <td> {{ HTML::link('deleteRecord/'.$print->id, 'ลบ',array('class' => 'btn btn-warning')) }} </td>
                    @endif 
    			</tr>
    			@endforeach
		</table>
        <div class="page-header"></div>
	@else
		<?php echo "Petition Table is empty."; ?>
	@endif
</div>
@stop