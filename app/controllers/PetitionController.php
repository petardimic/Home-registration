<?php

class PetitionController extends BaseController {

	public function showPetition($types)
	{
		return View::make('petition')->with('type',$types);
	}


	public function postPetition($type)
	{

		$petitiondata = array(
			'name' => Input::get('name'),
			'textPetition' => Input::get('textPetition')
		);

		$petition = array(
			'name' => 'Required',
			'textPetition' => 'Required'
		);

		$validator = Validator::make($petitiondata, $petition);

		if ($validator->passes())
        {
        	$new_pet=Petition::create($petitiondata);
        	$new_pet->type = $type;
        	$new_pet->save();
        	echo $new_pet->type;
        	return Redirect::to('profile')->with('success', 'You have register in successfully');
        }
        else
        {
        	return Redirect::back()->withErrors($validator)->withInput(Input::except('fail'));
        }
	}
}		