<?php

class HomeRegisController extends BaseController{

	public function showHomeRegis($id_pet)
	{
		return View::make('homeregis')->with('id_pet',$id_pet); 
	}

      public function mapHomeUser($id_user,$home_user){
            $home_user->homeUser()->attach($id_user);
      }

	public function postHomeRegis($id_pet){

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
                  $home_user = HomeRegis::create($homedata);
                  $pet = Petition::find($id_pet);
                  $pet->status = '1';
                  $pet->save();
                  HomeRegisController::mapHomeUser($pet->name,$home_user);
                  return Redirect::to('profile')->with('success', 'You have register in successfully');
            }
            else {
           // Something went wrong.
                  return Redirect::back()->withErrors($validator)->withInput(Input::except('fail'));
            }
	}
}
