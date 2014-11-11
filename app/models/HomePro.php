<?php

class HomePro extends Eloquent{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'home_pro';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array( 'user_id','home_regis_id');

	public function getUserId(){
		return $user_id;
	}

	public function getHomeId(){
		return $home_regis_id;
	}
}