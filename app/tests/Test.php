<?php

class Test extends TestCase{
	public function testRegister(){
		$this->seed('RolesSeeder');
		$this->seed('UserTableSeeder');
		$test = array(
			'username' => 'testUsername',
			'password' => 'testPassword',
			'name'     => 'testName',
			'surname'  => 'testSurName',
			'idcard'   => '1234567890123',
			'email'    => 'testEmail@hotmail.com',
			);
		$react = $this->action('POST','RegisterController@postRegister',$test);
		$this->assertRedirectedTo('login');

		$react = $this->action('POST','RegisterController@postRegister',$test);
		$this->assertRedirectedTo('register');
	}
	public function testLogin(){

		$test = array(
			'username' => 'testUsername',
			'password' => 'testPassword',
			);
		$react = $this->action('POST','LoginController@postLogin',$test);
		$this->assertRedirectedTo('profile');
	}
	public function testLogout(){
		$react = $this->call('GET','logout');

		$this->assertRedirectedTo('');
	}
}
?>