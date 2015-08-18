<?php

/**
 * REST Connection Exception
 *
 * REST Exception to be used for all connection related issues.
 * 
 * @author Robert Main
 * @package Communique\lib\Exceptions
 * @category Exception
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace Communique\lib\Exceptions;

/**
 *
 * Exception
 *
 * This exception is thrown for connection errors when attempting to reach the API.
 * 
 */
class RESTConnectionException extends RESTException{
	/**
	 * Constructor for REST Connection Exception
	 * @param String $message A human readable description of the exception
	 */
	public function __construct($message){
		parent::__construct($message);
	}
}