<?php

namespace PGP\Unit\DataValue\EmailTest;

use PGP\DataValue\Email;

class EmailTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidEmailException
	 * @expectedExceptionMessage Invalid Email
	 */
	public function testInValidEmailException() {
		$email = new Email ( "abc" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidEmailException
	 * @expectedExceptionMessage Empty Email
	 */
	public function testEmptyValueValidation() {
		$email = new Email ( "" );
	}
	
	
	public function testValidEmailValue() {
		$email = new Email ( "demo@test.com" );
		$this->assertTrue ( true );
	}
}

?>