<?php

namespace PGP\Unit\DataValue\EmailTest;

use PGP\DataValue\Name;

class NameTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidNameException
	 * @expectedExceptionMessage Name can not be empty
	 */
	public function testEmptyValueException() {
		$name = new Name ( "" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidNameException
	 * @expectedExceptionMessage Special characnter is not allowed in name
	 */
	public function testEmptyValueValidation() {
		$name = new Name ( "per %" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidNameException
	 * @expectedExceptionMessage Name can not be less less than
	 */
	public function testMinLengthValidation() {
		$name = new Name ( "1" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidNameException
	 * @expectedExceptionMessage Name can not be more than
	 */
	public function testMaxLengthValidation() {
		$name = new Name ( "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" );
	}
}

?>