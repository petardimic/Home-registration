<?php

class MemberController extends BaseController{

	public function showMember($id_user)
	{
            return View::make('member')->with('types',$id_user);
	}

	public function postMember($types){

		 $memberdata = array(
                  'orderNo'		=> Input::get('orderNo'),
                  'name'  	      => Input::get('name'), 
                  'nationality'	=> Input::get('nationality'),
                  'gender' 		=> Input::get('gender'),
                  'idNumber'        => Input::get('idNumber'),
                  'status'  	      => Input::get('status'),
                  'birthDate'    	=> Input::get('birthDate'),
                  'fatherData' 	=> Input::get('fatherData'),
                  'motherData'      => Input::get('motherData'),
                  'comeFrom' 	      => Input::get('comeFrom'),
                  'goTo' 	      => Input::get('goTo') 
            );

		$member = array(
			'orderNo' 		=> 'Required',
                  'name'  	      => 'Required',
                  'nationality'     => 'Required',
                  'gender'  		=> 'Required',
                  'idNumber'        => 'Required',
                  'status'  	      => 'Required',
                  'birthDate'    	=> 'Required',
                  'fatherData' 	=> 'Required',
                  'motherData'      => 'Required',
                  'comeFrom'		=> 'Required',
                  'goTo' 	      => 'Required'
		);

		$validator = Validator::make($memberdata, $member);
            if ($validator->passes())
            {
                  Member::create($memberdata);
                  return Redirect::to('officer')->with('success', 'You have register in successfully');
            }
            else {
           // Something went wrong.
                  return Redirect::to('member')->withErrors($validator)->withInput(Input::except('fail'));
            }

	}

}