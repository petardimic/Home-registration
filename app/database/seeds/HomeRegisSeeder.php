<?php
class HomeRegisSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		DB::table('homeregis')->delete();

		   $home = new HomeRegis;
         $home->bookNo		= '114';
         $home->homeCode  	= '11425830';
         $home->regOffice	= 'KMITl';
         $home->address 	= '1142/58';
         $home->villageName = 'KMITl';
         $home->homeName  	='ADMIN';
         $home->homeType    ='Home';
         $home->buildingType = 'Wood';
         $home->dateAssignAddr = '03/11/2014';
         $home->registrar 	= '02/11/2014';
         $home->typingDate 	= 'thailand';
         $home->save();
	}
}
