<?php
class Tyrion
{
	public function sleepWith($e)
	{
		$class_name = get_class($e);
		if ($class_name == "Jaime")
			print("Not even if I'm drunk" . PHP_EOL);
		else if ($class_name == "Sansa")
			print("Let's do this" . PHP_EOL);
		else if ($class_name == "Cersei")
			print("Not even if I'm drunk" . PHP_EOL);
	}
}
?>