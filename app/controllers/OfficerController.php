<?php

class OfficerController extends BaseController {

	public function showOfficer()
	{
		$user = User::find(Auth::id());
		if($user->permission == "Officer"){
			return View::make('officer');
		}else {
			return Redirect::to('profile');
		}
	}

	
}		