<?php

class HomeRegis extends Eloquent{



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'homeregis';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('bookNo','homeCode','regOffice','address','villageName','homeName','homeType',
		'buildingType','dateAssignAddr','registrar','typingDate');

	public function homeUser(){
		 return $this->belongsToMany('User','home_pro');
	}

}