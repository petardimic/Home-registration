<?php

class HomeProData extends Eloquent{



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
	protected $fillable = array('user_id','home_regis_id');

}