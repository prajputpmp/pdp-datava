<?php

/**
 * Email Data Value class
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright
*/
namespace PGP\DataValue;

use PGP\DataValue\Interfaces\iDataValue;
use PGP\DataValue\Validator\PlatformValidator;

/**
 * Platform DataValue class for platform
 */
class Platform implements iDataValue {
	private $value;

	public function __construct($value) {
		if (PlatformValidator::validate ( trim($value) )) {
			$this->value = $value;
		}
	}

	public function value() {
		return $this->value;
	}
}