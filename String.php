<?php

namespace StephenHill
{
	class String
	{
		// Fields
		private $_string;
		
		// Constructor
		public function __construct()
		{
			unset($this->_length);
			unset($this->_string);
			
			if (func_num_args() === 0)
			{
				return;
			}
			
			if (func_num_args() === 1)
			{
				if (is_string(func_get_arg(0)) === true)
				{
					$this->_string = func_get_arg(0);
					return;
				}
			}
		}
		
		// Public Methods
		public function __get($name)
		{
			switch ($name)
			{
				case "Value":
					return (string)$this->_string;
					break;
			}
		}
		
		public function __toString()
		{
			return (string)$this->_string;
		}
		
		public function toUpperCase()
		{
			$this->_string = mb_strtoupper($this->_string);
			
			return $this;
		}
		
		public function toLowerCase()
		{
			$this->_string = mb_strtolower($this->_string);
			
			return $this;
		}
		
		public function length()
		{
			return mb_strlen($this->_string);
		}
	}
}