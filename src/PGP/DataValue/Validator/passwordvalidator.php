<?php

/**
 * Email Data Value validator
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright	
*/
namespace PGP\DataValue\Validator;

use PGP\Datavalue\Interfaces\iValidator;
use PGP\DataValue\Exceptions\InvalidPasswordException;


/**
 * Password DataValue validator class
 */
class PasswordValidator implements iValidator {
	const MIN_LENGTH = 8;
	const MAX_LENGTH = 20;
	
	const EMPTY_PASSWORD_MESSAGE = "Password can not be empty";
	const MIN_LENGTH_MESSAGE =  "Password can not less minimum characters (%d)";
	const MAX_LENGTH_MESSAGE = 	"Password can not more than maximum characters (%d)";
	const INVALID_PASSOWRD_MESSAGE = "Invalid Password";
	
	public static function validate($password) {
		
		if (empty ( $password )) {
			throw new InvalidPasswordException (self::EMPTY_PASSWORD_MESSAGE );
		}
		
		if (strlen($password) < self::MIN_LENGTH ) {
			throw new InvalidPasswordException (sprintf(self::MIN_LENGTH_MESSAGE,self::MIN_LENGTH));		
		}
		
		if (strlen($password) > self::MAX_LENGTH) {
			throw new InvalidPasswordException ( sprintf(self::MAX_LENGTH_MESSAGE,self::MAX_LENGTH));
		}

		/*
		 Explaining $\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$
		$ = beginning of string
		\S* = any set of characters
		(?=\S{8,}) = of at least length 8
		(?=\S*[a-z]) = containing at least one lowercase letter
		(?=\S*[A-Z]) = and at least one uppercase letter
		(?=\S*[\d]) = and at least one number
		(?=\S*[\W]) = and at least a special character (non-word characters)
		$ = end of the string
		*/
		if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $password)) {
			throw new InvalidPasswordException (self::INVALID_PASSOWRD_MESSAGE);
		}
		return true;
	}
}