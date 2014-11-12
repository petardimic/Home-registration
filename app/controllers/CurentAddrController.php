<?php

class CurrentAddrController extends BaseController {

	public function showCurrentAddr($id_user,$id_home)
	{
		return View::make('currentAddr')->with('id_users',$id_user)->with('id_homes',$id_home);
	}

	public function postCurrentAddr($id_users,$id_homes)
	{
		$users = User::find(Auth::id());
		$users->currentAddr = $id_homes;
		$users->save();
		return Redirect::to('profile');
	}
}