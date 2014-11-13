<?php

class CurrentAddrController extends BaseController {

	public function showCurrentAddr($id,$id_home)
	{
		return View::make('currentAddr')->with('id_pet',$id)->with('id_homes',$id_home);
	}

	public function postCurrentAddr($id_pet,$id_homes)
	{
		if(User::find(Auth::id())->permission == "User"){
			$new_pet = new Petition;
			$new_pet->textPetition = HomeRegis::find($id_homes)->address;
			$new_pet->type = '5';
			$new_pet->name = Petition::find($id_pet)->name;
			$new_pet->home = $id_homes;
			$new_pet->status = '0';
			$new_pet->save();
			return Redirect::to('profile');
		}else {
			$user = User::find(Petition::find($id_pet)->name);
			$user->currentAddr = $id_homes;
			$user->save();
			$pet = Petition::find($id_pet);
			$pet->status = '1';
			$pet->save();
			return Redirect::to('officer');
		}

	}
}