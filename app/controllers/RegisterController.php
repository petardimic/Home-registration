<?php

class RegisterController extends BaseController {
    
	public function showRegister()
	{
		  return View::make('register');
	}


	public function postRegister(){
		  // Get all the inputs.
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Hash::make(Input::get('password')),
            'name'	   => Input::get('name'),
            'surname'  => Input::get('surname'),
            'idcard'   => Input::get('idcard'),
            'email'    => Input::get('email'),
            'currentAddr'    => '0'
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required|unique:users',
            'password'  => 'Required',
            'name'		=> 'Required',
            'surname'   => 'Required',
            'idcard'    => 'Required',
            'email'		=> 'Required',
            'currentAddr'    => 'Required'
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            $new_user = User::create($userdata);
            $user = User::find(Auth::id());
            if(!Auth::guest()){
                $new_user ->permission = "Officer";
                $new_user ->address = "-";
                $new_user ->save();
            }
            else {
                $new_user ->permission = "User ";
                $new_user ->save();
            }
        
            Auth::logout();
        
        //----------------------------------------------------------------------------
             // Redirect to homepage
            return Redirect::to('login')->with('success', 'You have register in successfully');
         }   
            
           else {
           // Something went wrong.
            return Redirect::to('register')->withErrors($validator)->withInput(Input::except('fail'));
        }
        
    }
	
}