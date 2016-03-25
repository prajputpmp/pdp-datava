<?php

/**
 * Email Validator class to validate email
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright	
*/
namespace PGP\DataValue\Validator;

use PGP\Datavalue\Interfaces\iValidator;
use PGP\DataValue\Exceptions\InvalidEmailException;
/**
 * Email DataValue validator class
 */
class EmailValidator implements iValidator {
	public static function validate($email) {
		if (empty ( $email )) {
			throw new InvalidEmailException ( "Empty Email" );
		}
		
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		if (! preg_match ( $regex, $email )) {
			throw new InvalidEmailException ( "Invalid Email" );
		}
		
		return true;
	}
}