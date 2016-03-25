<?php

namespace PGP\Tests\Unit\DataValue\PasswordTest;

use PGP\DataValue\Password;
use PGP\DataValue\Validator\PasswordValidator;

class PasswordTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidPasswordException
	 * @expectedExceptionMessage Password can not be empty
	 */
	public function test_Empty_Password_Validation() {
		$password = new Password ( "" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidPasswordException
	 * @expectedExceptionMessage Password can not less minimum characters
	 */
	public function test_Password_Min_Length_Validation() {
		$password = new Password ( "abcd" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidPasswordException
	 * @expectedExceptionMessage Password can not more than maximum characters
	 */
	public function test_Password_Max_Length_Validation() {
		$password = new Password ( "123456789101112123141516" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidPasswordException
	 * @expectedExceptionMessage Invalid Password
	 */
	public function test_Invalid_Password_Validation() {
		$password = new Password ( "simpletextpassword" );
	}
	public function test_Valid_Password() {
		$password = new Password ( "Val1dP@ssW0rd" );
		$this->assertTrue ( true );
	}
}

?>