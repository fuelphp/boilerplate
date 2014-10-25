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
 * Manager class
 *
 * @package Fuel\Example
 *
 * @since 2.0.0
 */
class Manager
{
	/**
	 * @var Driver
	 */
	protected $driver;

	/**
	 * Returns the driver
	 *
	 * @return Driver
	 *
	 * @since 2.0.0
	 */
	public function getDriver()
	{
		return $this->driver;
	}

	/**
	 * Sets the driver
	 *
	 * @param Driver $driver
	 *
	 * @return $this
	 *
	 * @since 2.0.0
	 */
	public function setDriver(Driver $driver)
	{
		$this->driver = $driver;

		return $this;
	}
}
