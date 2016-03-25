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
use PGP\DataValue\Validator\EmailValidator;

/**
 * Email DataValue class
 */
class Email implements iDataValue {
	private $value;
	
	public function __construct($value) {
		if (EmailValidator::validate ( $value )) {
			$this->value = $value;
		}
	}
	
	public function value() {
		return $this->value;
	}
}