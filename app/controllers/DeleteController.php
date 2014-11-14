<?php

class DeleteController extends BaseController {

	public function showDelete($id)
		{
			return View::make('deleteRecord')->with('idpet',$id);
		}

	public function deletePetition($idpet) {
		$user = User::find(Auth::id());
		$peti = Petition::find($idpet);
		if($user->permission == 'Officer' )
		{
        //delete petition
			$peti->delete();
			return Redirect::to('officer')->with('success', 'You have successfully delete ');
		}
 		//Something went wrong
		else
			return Redirect::back()->with('fail', 'access deny' );
	
	}

}