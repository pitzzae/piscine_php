<?php
class Unholyfactory
{
	private $_absorbed = array();

	public function absorb($e)
	{
		if (get_parent_class($e) != 'Fighter')
		{
			print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
			return ;
		}
		if (!in_array($e, $this->_absorbed))
		{
			$this->_absorbed[$e->getName()] = $e;
			print("(Factory absorbed a fighter of type ".$e->getName().")".PHP_EOL);
		}
		else
			print("(Factory already absorbed a fighter of type ".$e->getName().")".PHP_EOL);
	}
	public function fabricate($type)
	{
		if (array_key_exists($type, $this->_absorbed))
		{
			print("(Factory fabricates a fighter of type $type)" . PHP_EOL);
			return (clone $this->_absorbed[$type]);
		}
		else
			print("(Factory hasn't absorbed any fighter of type $type)".PHP_EOL);	
	}
}
?>