<?php
	header("Content-Type: image/png");
	$file = '../img/42.png';
	$type = 'image/png';
	header('Content-Length: ' . filesize($file));
	readfile($file);
?>

