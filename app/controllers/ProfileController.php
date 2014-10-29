<?php

class ProfileController extends BaseController {

	public function showProfile()
	{
		return View::make('profile');
		//->with('users',User::all())
	}

}		