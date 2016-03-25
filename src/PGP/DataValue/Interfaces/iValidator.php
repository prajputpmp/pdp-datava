<?php
/**
 * An interface for DataValue classes
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash
* @license		Proprietary
* @copyright	(c) -
*/

namespace PGP\Datavalue\Interfaces;

/**
 * An interface for Validator
 */
interface iValidator {

	/**
	 * Return value 
	 *
	 * @return value
	 */
	public static function validate($value);
	
}

