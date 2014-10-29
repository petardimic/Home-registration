<?php

class RegisterTest extends TestCase{
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
}
?>