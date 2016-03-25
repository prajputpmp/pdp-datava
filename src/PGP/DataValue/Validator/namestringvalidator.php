<?php

/**
 * Name string validator to validate name string
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright	
*/
namespace PGP\DataValue\Validator;

use PGP\Datavalue\Interfaces\iValidator;
use PGP\Datavalue\Exceptions\InvalidNameException;

/**
 * Password DataValue validator class
 */
class NameStringValidator implements iValidator {
	
	const MIN_LENGTH = 2;
	const MAX_LENGTH = 50;
	
	const EMPTY_NAME_STRING_MESSAGE = "Name can not be empty";
	const INVALID_CHARACTER_NAME_MESSAGE = "Special characnter is not allowed in name";
	const MIN_LENGTH_MESSAGE = "Name can not be less less than 2 characters";
	const MAX_LENGTH_MESSAGE = "Name can not be more than 50 characters";
	
	public static function validate($nameString) {
		
		if (empty ( $nameString )) {
			throw new InvalidNameException (self::EMPTY_NAME_STRING_MESSAGE );
		}
		
		if (strlen($nameString) < self::MIN_LENGTH ) {
			throw new InvalidNameException (self::MIN_LENGTH_MESSAGE  );		
		}
		
		if (strlen($nameString) > self::MAX_LENGTH) {
			throw new InvalidNameException ( self::MAX_LENGTH_MESSAGE);
		}

		//Name should contain only letters
		if (!preg_match("/^[\pL]*$/", $nameString)) throw new InvalidNameException (self::INVALID_CHARACTER_NAME_MESSAGE);

		return true;
	}
}