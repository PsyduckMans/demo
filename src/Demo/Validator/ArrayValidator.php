<?php
/**
 * Demo Framework
 * 
 * @link		https://github.com/PsyduckMans/demo
 * @copyright	Copyright (c) 2012-2013 Not-Bad (https://www.not-bad.org)
 * @license		http://spdx.org/licenses/GPL-3.0
 * @version		$Id$
 */
namespace Demo\Validator;

class ArrayValidator {
	/**
	 * @var array
	 */
	private $_array = array();
	
	/**
	 * __construct
	 * @param array $array
	 */
	public function __construct(array $array) {
		$this->_array = $array;
	}
	
	/**
	 * check $_array is empty
	 * @return bool
	 */
	public function isEmpty() {
		return empty($this->_array);
	}
}