<?php
/**
*	This file contains the Rating Exception Class.
*
*	@package	Frozensheep\EPCGenerator
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\EPCGenerator\Exception;

/**
*	Rating Exception Class
*
*	Exception for a bad rating value.
*
*	@package	Frozensheep\EPCGenerator
*
*/
class RatingException extends \RuntimeException {

	/**
	*	Constructor
	*
	*	@return self
	*/
	public function __construct($strError){
		parent::__construct($strError);
	}
}