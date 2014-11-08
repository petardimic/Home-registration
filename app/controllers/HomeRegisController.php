<?php

class HomeRegisController extends BaseController{

	public function showHomeRegis($id)
	{
		return View::make('homeregis')->with('id',$id);
	}

	public function postHomeRegis($id){

		 $homedata = array(
                  'bookNo'		=> Input::get('bookNo'), //Book Number
                  'homeCode'  	=> Input::get('homeCode'), 
                  'regOffice'		=> Input::get('regOffice'), //อำเภอที่จดทะเบียนด้วย
                  'address' 		=> Input::get('address'),
                  'villageName'     => Input::get('villageName'), //ชื่อหมู่บ้าน
                  'homeName'  	=> Input::get('homeName'), //
                  'homeType'    	=> Input::get('homeType'), //ประเภทบ้าน
                  'buildingType' 	=> Input::get('buildingType'), //ชนิดตึก
                  'dateAssignAddr'  => Input::get('dateAssignAddr'), //วันที่ขอที่อยู่
                  'registrar' 	=> Input::get('registrar'), //นายทะเบียน
                  'typingDate' 	=> Input::get('typingDate') //วันที่พิมพ์หนังสือทะเบียนบ้าน
            );

		$home = array(
			'bookNo' 		=> 'Required',
                  'homeCode'  	=> 'Required',
                  'regOffice'		=> 'Required',
                  'address'  		=> 'Required',
                  'villageName'     => 'Required',
                  'homeName'  	=> 'Required',
                  'homeType'    	=> 'Required',
                  'buildingType' 	=> 'Required',
                  'dateAssignAddr'  => 'Required',
                  'registrar'		=> 'Required',
                  'typingDate' 	=> 'Required'
		);

		$validator = Validator::make($homedata, $home);
            if ($validator->passes())
            {
                  $user = User::all();
                  
                  HomeRegis::create($homedata);
                  return Redirect::to('profile')->with('success', 'You have register in successfully');
            }
            else {
           // Something went wrong.
                  return Redirect::back()->withErrors($validator)->withInput(Input::except('fail'));
            }
	}
}
