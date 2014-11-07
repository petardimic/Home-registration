<?php
class MemberSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		DB::table('member')->delete();

		   $member = new Member;
         $member->orderNo		   = '-';
         $member->name  	      = 'Shinji Ikari';
         $member->nationality	   = 'N/A';
         $member->gender 	      = 'Male';
         $member->idNumber       = 'N/A';
         $member->status  	      = 'single';
         $member->birthDate      ='06/06/2001';
         $member->fatherData     = 'Gendou Ikari';
         $member->motherData     = 'Yui Ikari';
         $member->comeFrom 	   = '-';
         $member->goTo 	         = '-';
         $member->save();
	}
}