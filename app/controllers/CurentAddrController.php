<?php

class CurrentAddrController extends BaseController {

	public function showCurrentAddr($id_user,$id_home)
	{
		return View::make('currentAddr')->with('id_users',$id_user)->with('id_homes',$id_home);
	}

	public function postCurrentAddr($id_users,$id_homes)
	{
		if(User::find(Auth::id())->permission == "User"){
			$new_pet = new Petition;
			$new_pet->textPetition = HomeRegis::find($id_homes)->address;
			$new_pet->type = '5';
			$new_pet->name = $id_users;
			$new_pet->home = $id_homes;
			$new_pet->save();
			return Redirect::to('profile');
		}else {
			$user = User::find($id_users);
			$user->currentAddr = $id_homes;
			$user->save();
			return Redirect::to('officer');
		}

	}
}