#!/usr/bin/php
<?php
	include("ft_is_sort.php");
	echo "Test 1 --> Le tableau n’est pas trie\n";
	$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
	$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
	if (ft_is_sort($tab))
		echo "Le tableau est trie\n";
	else
		echo "Le tableau n’est pas trie\n";
	echo "Test 2 --> Le tableau est trie\n";
	$tab = array("!/@#;^", "42", "Et qu’est-ce qu’on fait maintenant ?","Hello World", "salut");
	$tab[] = "zZzZzZz";
	if (ft_is_sort($tab))
		echo "Le tableau est trie\n";
	else
		echo "Le tableau n’est pas trie\n";
?>