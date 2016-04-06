<?php
/**
*	Generate Certificate.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

require_once(__DIR__.'/../vendor/autoload.php');

use Frozensheep\EPCGenerator\Rating;
use Frozensheep\EPCGenerator\EPCGenerator;

//create an energy efficiency rating
$objEnergyEfficiency = new Rating(40, 62);

//create an environmental impact rating
$objEnvironmentalImpact = new Rating(32, 55);
