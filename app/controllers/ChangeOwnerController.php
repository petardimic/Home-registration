<?php

class ChangeOwnerController extends BaseController {

	public function showChange($types,$id_user)
	{
		return View::make('changeOwner')->with('type',$types)->with('id_increment',$id_user);
	}
}
