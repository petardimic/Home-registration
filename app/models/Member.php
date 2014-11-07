<?php

class Member extends Eloquent{



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'member';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('orderNo','name','nationality','gender','idNumber','status','birthDate',
		'fatherData','motherData','comeFrom','goTo');

}