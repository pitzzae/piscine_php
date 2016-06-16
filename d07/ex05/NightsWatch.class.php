<?php
class NightsWatch implements IFighter
{
	private $_fight;

	public function recruit($e)
	{
		if (method_exists($e, 'fight'))
			$_fight = $e->fight().PHP_EOL;
	}
	public function fight()
	{
		print($_fight);
	}
}
?>