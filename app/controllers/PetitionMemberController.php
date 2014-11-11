<?php

class PetitionMemberController extends BaseController {

	public function showPetitionMember($types,$id_user)
	{
		return View::make('petitionMember')
		->with('type',$types)
		->with('id_increment',$id_user);
	
	}

	public function postPetitionMember($type,$id_increment)
	{

		$petitiondata = array('textPetition' => Input::get('textPetition'));
		$petition = array('textPetition' => 'Required');

		$validator = Validator::make($petitiondata, $petition);

		if ($validator->passes())
        {
        	$new_pet=Petition::create($petitiondata);
        	$new_pet->type = $type;
        	$new_pet->name = User::find($id_increment)->id;
        	$new_pet->save();
        	return Redirect::to('petitionMember/'.$type.'/'.$id_increment)->with('success', 'You have register in successfully');
        }
        else
        {
        	return Redirect::back()->withErrors($validator)->withInput(Input::except('fail'));
        }
	}

}	

?>	