<?php

class MoveHaveHomeController extends BaseController {

	public function showMoveHaveHome($types,$id_user)
	{
		return View::make('movehavehome')->with('type',$types)->with('id_increment',$id_user);
	}
}
