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
use PGP\DataValue\Exceptions\InvalidPlatformException;
/**
 * Email DataValue validator class
 */
class PlatformValidator implements iValidator {
	
	public static function validate($platform) {
		if (empty ( $platform )) {
			throw new InvalidPlatformException ( "Empty Platform" );
		}
		
		$array = array('desktop','mobile','tablet');
		if (!in_array($platform, $array)) {
			throw new InvalidPlatformException ( "Invalid Platform" );
		}
		
		return true;
	}
}