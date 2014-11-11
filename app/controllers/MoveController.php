<?php

class MoveController extends BaseController {

	public function showMove($types,$id_user)
	{
		return View::make('move')->with('type',$types)->with('id_increment',$id_user);
	}
}
