<?php
/**
*	This file contains the Rating class.
*
*	@package	Frozensheep\EPCGenerator
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\EPCGenerator;

use Frozensheep\EPCGenerator\Exception\RatingException;

/**
*	RightmoveADF Class
*
*	Class for the RightmoveADF.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Rating {

	/**
	*	@var int $_numCurrent The current rating.
	*/
	protected $_numCurrent = null;

	/**
	*	@var int $_numPotential The potential rating.
	*/
	protected $_numPotential = null;

	/**
	*	Class Constructor
	*
	*	Class constructure which accepts the current and potential rating values.
	*	@param int $numCurrent The current rating.
	*	@param int $numPotential The potential rating.
	*	@return self
	*/
	public function __construct($numCurrent = null, $numPotential = null){
		$this->setCurrent($numCurrent);
		$this->setPotential($numPotential);
	}

	/**
	*	Set Current Method
	*
	*	Sets the current rating value.
	*	@param int $numCurrent The current rating.
	*	@return boolean If successful.
	*/
	public function setCurrent($numCurrent){
		if($this->_valid($numCurrent)){
			if($this->isBelow($numCurrent, $this->_numPotential)){

			}
		}

		return 0;
	}

	/**
	*	Set Potential Method
	*
	*	Sets the potential rating value.
	*	@param int $numPotential The potential rating.
	*	@return boolean If successful.
	*/
	public function setPotential($numPotential){
		if($this->_valid($numPotential)){
			if($this->isBelow($this->_numCurrent, $numPotential)){

			}
		}

		return 0;
	}

	/**
	*	Is Valid Method
	*
	*	Checks to make sure the passed value is valided within the rules. An int and between 1 and 100.
	*	@param int $numValue The value to check.
	*	@return boolean
	*/
	private function _valid($numValue){
		if(!is_int($numValue)){
			//throws error
			echo "not an int";
			return 0;
		}

		if($numValue < 1 || $numValue > 100){
			//throws error
			echo "not in range";
			return 0;
		}

		return 1;
	}

	/**
	*	Set Potential Method
	*
	*	Sets the potential rating value.
	*	@param int $numPotential The potential rating.
	*	@return boolean If successful.
	*/
	private function _isBelow($numLow, $numHigh){
		if($numLow > $numHigh){
			//throws error
			return 0;
		}

		return 1;
	}
}