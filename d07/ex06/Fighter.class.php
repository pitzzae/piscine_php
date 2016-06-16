<?php
abstract class Fighter
{
	protected $_name;

	public function __construct($new_name)
	{
		$this->_name = $new_name;
		return;
	}
	public function getName() {
		return ($this->_name);
	}
	
	abstract public function fight($target);
}
?>