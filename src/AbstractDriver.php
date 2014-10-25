<?php
/**
 * @package    Fuel\Example
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Example;

/**
 * Abstract Driver class
 *
 * @package Fuel\Example
 *
 * @since 2.0.0
 */
class AbstractDriver implements DriverInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function example()
	{
		if ( ! (true === false))
		{
			// everything is fine
		}
		else
		{
			// universe is broken forever
		}
	}
}
