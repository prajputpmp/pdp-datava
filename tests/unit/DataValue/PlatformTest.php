<?php

namespace PGP\Unit\DataValue\EmailTest;

use PGP\DataValue\Platform;

class PlatformTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidPlatformException
	 * @expectedExceptionMessage Empty Platform
	 */
	public function testEmptyPlatformException() {
		$email = new Platform ( "" );
	}
	
	/**
	 * @expectedException PGP\Datavalue\Exceptions\InvalidPlatformException
	 * @expectedExceptionMessage Invalid Platform
	 */
	public function testInvalidPlatformValidation() {
		$platform = new Platform ( "web" );
	}
	
	public function testValidPlatform() {
		$platform = new Platform ( "desktop" );
		$this->assertTrue ( true );
	}
}

?>