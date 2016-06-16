#!/usr/bin/php
<?php
/******************************************************************************#
#                                                                              #
#                                                         :::      ::::::::    #
#    correct_d01.php                                    :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: gtorresa <gtorresa@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#   Created: 2016/04/05 16:40:23 by gtorresa          #+#    #+#               #
#   Updated: 2016/04/05 18:26:11 by gtorresa         ###   ########.fr         #
#                                                                              #
#******************************************************************************/
	function mlx_test()
	{
		$output = "";
		for($j = 0; $j < 1000; $j++)
		{
			$output = $output."X";
		}
		$output = $output."\n";
		return ($output);
	}

	function tri_bulle_test(&$tableau)
	{
		$taille = count($tableau);
		for($i = 1; $i < $taille; $i++)
		{
			for($j = 0; $j < $taille - 1; $j++)
			{
				if($tableau[$j+1] < $tableau[$j])
				{
					$temp = $tableau[$j+1];
					$tableau[$j+1] = $tableau[$j];
					$tableau[$j] = $temp;
				}
			}
		}
	}

	function print_no_file($file, $tab)
	{
		echo $tab."File '".$file."' not found\n";
	}

	if (isset($argv[1]))
	{
		if (substr($argv[1], strlen($argv[1]) - 1, strlen($argv[1])) != "/")
			$argv[1] = $argv[1]."/";
		//----------------------- EX00------------------------\\
		if (file_exists($argv[1]."ex00/hw.php"))
		{
			echo "Test ex00\n";
			$op = shell_exec($argv[1]."ex00/hw.php");
			if ($op == "Hello World\n")
				echo "\tHello World\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tHello World\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Hello World\n")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex00/hw.php", "");
		//----------------------- EX01------------------------\\
		if (file_exists($argv[1]."ex01/mlx.php"))
		{
			echo "Test ex01\n";
			$op = shell_exec($argv[1]."ex01/mlx.php");
			if ($op == mlx_test())
				echo "\tmlx_ex01\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tmlx_ex01\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo $op."\n";
				echo "Correction ▼\n";
				echo mlx_test()."\n";
			}
		}
		else
			print_no_file($argv[1]."ex01/mlx.php", "");
		//----------------------- EX02------------------------\\
		if (file_exists($argv[1]."ex02/oddeven.php"))
		{
			echo "Test ex02\n";
			$op = shell_exec("/bin/echo 41 | ".$argv[1]."ex02/oddeven.php");
			$tmp = explode("\n", $op);
			$op = $tmp[0];
			if ($op == "Entrez un nombre: Le chiffre 41 est Impair")
				echo "\toddeven_ex02\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\toddeven_ex02\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Entrez un nombre: Le chiffre 41 est Impair")."\n\n";
			}
			$op = shell_exec("/bin/echo 42 | ".$argv[1]."ex02/oddeven.php");
			$tmp = explode("\n", $op);
			$op = $tmp[0];
			if ($op == "Entrez un nombre: Le chiffre 42 est Pair")
				echo "\toddeven_ex02\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\toddeven_ex02\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Entrez un nombre: Le chiffre 42 est Pair")."\n\n";
			}
			$op = shell_exec("/bin/echo -41 | ".$argv[1]."ex02/oddeven.php");
			$tmp = explode("\n", $op);
			$op = $tmp[0];
			if ($op == "Entrez un nombre: Le chiffre -41 est Impair")
				echo "\toddeven_ex02\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\toddeven_ex02\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Entrez un nombre: Le chiffre -41 est Impair")."\n\n";
			}
			$op = shell_exec("/bin/echo -42 | ".$argv[1]."ex02/oddeven.php");
			$tmp = explode("\n", $op);
			$op = $tmp[0];
			if ($op == "Entrez un nombre: Le chiffre -42 est Pair")
				echo "\toddeven_ex02\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\toddeven_ex02\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Entrez un nombre: Le chiffre -42 est Pair")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex02/oddeven.php", "");
		//----------------------- EX03------------------------\\
		if (file_exists($argv[1]."ex03/ft_split.php"))
		{
			echo "Test ex03\n";
			include($argv[1]."ex03/ft_split.php");
			$ret = true;
			$i = 0;
			$prim_array = array("AAA", "Hello", "World");
			$test_array = ft_split("Hello      World     AAA");
			while (isset($test_array[$i]))
			{
				if ($test_array[$i] != $prim_array[$i])
					$ret = false;
				$i++;
			}
			if ($ret == true)
				echo "\tft_split_ex03\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tft_split_ex03\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n";
				$i = 0;
				while (isset($test_array[$i]))
				{
					if ($test_array[$i] == $prim_array[$i])
						echo "'".$test_array[$i]."'\t == \t'".$prim_array[$i]."'\n";
					else
						echo "'".$test_array[$i]."'\t \033[31m!=\033[0m \t'".$prim_array[$i]."'\n";
					$i++;
				}
				echo "\n";
			}
			$i = 0;
			$ret = true;
			$prim_array = array("AAA", "Hello", "World");
			$test_array = ft_split("Hello      World     AAA");
			while (isset($test_array[$i]))
			{
				if ($test_array[$i] != $prim_array[$i])
					$ret = false;
				$i++;
			}
			if ($ret == true)
				echo "\tft_split_ex03\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tft_split_ex03\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n";
				$i = 0;
				while (isset($test_array[$i]))
				{
					if ($test_array[$i] == $prim_array[$i])
						echo "'".$test_array[$i]."'\t == \t'".$prim_array[$i]."'\n";
					else
						echo "'".$test_array[$i]."'\t \033[31m!=\033[0m \t'".$prim_array[$i]."'\n";
					$i++;
				}
				echo "\n";
			}
			$i = 0;
			$ret = true;
			$prim_array = array("42", "c'est", "coucou", "moi");
			$test_array = ft_split("    coucou c'est moi       42 ");
			while (isset($test_array[$i]))
			{
				if ($test_array[$i] != $prim_array[$i])
					$ret = false;
				$i++;
			}
			if ($ret == true)
				echo "\tft_split_ex03\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tft_split_ex03\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n";
				$i = 0;
				while (isset($test_array[$i]))
				{
					if ($test_array[$i] == $prim_array[$i])
						echo "'".$test_array[$i]."'\t == \t'".$prim_array[$i]."'\n";
					else
						echo "'".$test_array[$i]."'\t \033[31m!=\033[0m \t'".$prim_array[$i]."'\n";
					$i++;
				}
				echo "\n";
			}
			$i = 0;
			$ret = true;
			$prim_array = array("Bonjours", "le", "monde");
			$test_array = ft_split("     Bonjours     le      monde     ");
			while (isset($test_array[$i]))
			{
				if ($test_array[$i] != $prim_array[$i])
					$ret = false;
				$i++;
			}
			if ($ret == true)
				echo "\tft_split_ex03\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tft_split_ex03\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n";
				$i = 0;
				while (isset($test_array[$i]))
				{
					if ($test_array[$i] == $prim_array[$i])
						echo "'".$test_array[$i]."'\t == \t'".$prim_array[$i]."'\n";
					else
						echo "'".$test_array[$i]."'\t \033[31m!=\033[0m \t'".$prim_array[$i]."'\n";
					$i++;
				}
				echo "\n";
			}
		}
		else
			print_no_file($argv[1]."ex03/ft_split.php", "");
		//----------------------- EX04------------------------\\
		if (file_exists($argv[1]."ex04/aff_param.php"))
		{
			echo "Test ex04\n";
			$op = shell_exec($argv[1]."ex04/aff_param.php toto ahah foo bar quax");
			if ($op == "toto\nahah\nfoo\nbar\nquax\n")
				echo "\taff_param_ex04\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\taff_param_ex04\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "toto\nahah\nfoo\nbar\nquax\n")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex04/aff_param.php", "");
		//----------------------- EX05------------------------\\
		if (file_exists($argv[1]."ex05/epur_str.php"))
		{
			echo "Test ex05\n";
			$op = shell_exec($argv[1]."ex05/epur_str.php 'Salut,     comment ca     va     ?'");
			if ($op == "Salut, comment ca va ?\n")
				echo "\tepur_str_ex05\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tepur_str_ex05\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Salut, comment ca va ?\n")."\n\n";
			}
			$op = shell_exec($argv[1]."ex05/epur_str.php '   Hello World    '");
			if ($op == "Hello World\n")
				echo "\tepur_str_ex05\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tepur_str_ex05\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Hello World\n")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex05/epur_str.php", "");
		//----------------------- EX06------------------------\\
		if (file_exists($argv[1]."ex06/ssap.php"))
		{
			echo "Test ex06\n";
			$op = shell_exec($argv[1]."ex06/ssap.php foo bar");
			if ($op == "bar\nfoo\n")
				echo "\tssap_ex06\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tssap_ex06\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "bar\nfoo\n")."\n\n";
			}
			$op = shell_exec($argv[1]."ex06/ssap.php foo bar 'yo man' 'A moi compte, deux mots' Xibul");
			if ($op == "A\nXibul\nbar\ncompte,\ndeux\nfoo\nman\nmoi\nmots\nyo\n")
				echo "\tssap_ex06\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tssap_ex06\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\t\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "A\nXibul\nbar\ncompte,\ndeux\nfoo\nman\nmoi\nmots\nyo\n")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex06/ssap.php", "");
		//----------------------- EX07------------------------\\
		if (file_exists($argv[1]."ex07/rostring.php"))
		{
			echo "Test ex07\n";
			$op = shell_exec($argv[1]."ex07/rostring.php sdfkjsdkl sdkjfskljdf");
			if ($op == "sdfkjsdkl\n")
				echo "\trostring_ex07\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\trostring_ex07\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "sdfkjsdkl\n")."\n\n";
			}
			$op = shell_exec($argv[1]."ex07/rostring.php 'hello world  aaa' fslkdjf");
			if ($op == "world aaa hello\n")
				echo "\trostring_ex07\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\trostring_ex07\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "world aaa hello\n")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex07/rostring.php", "");
		//----------------------- EX08------------------------\\
		if (file_exists($argv[1]."ex08/ft_is_sort.php"))
		{
			echo "Test ex08\n";
			include($argv[1]."ex08/ft_is_sort.php");
			$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
			$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
			if (ft_is_sort($tab))
				echo "\tft_is_sort_ex08\t-->\t\033[31mNOK\033[0m\n";
			else
				echo "\tft_is_sort_ex08\t-->\t\033[32mOK\033[0m\n";
			tri_bulle_test($tab);
			if (ft_is_sort($tab))
				echo "\tft_is_sort_ex08\t-->\t\033[32mOK\033[0m\n";
			else
				echo "\tft_is_sort_ex08\t-->\t\033[31mNOK\033[0m\n";
		}
		else
			print_no_file($argv[1]."ex08/ft_is_sort.php", "");
		//----------------------- EX09------------------------\\
		if (file_exists($argv[1]."ex09/ssap2.php"))
		{
			echo "Test ex09\n";
			$op = shell_exec($argv[1]."ex09/ssap2.php toto tutu 4234 '_hop XXX' \## '1948372 AhAhAh'");
			if ($op == "AhAhAh\ntoto\ntutu\nXXX\n1948372\n4234\n##\n_hop\n")
				echo "\taff_param_ex09\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\taff_param_ex09\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\t\t\tCorrection ▼\n";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)." != ";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "AhAhAh\ntoto\ntutu\nXXX\n1948372\n4234\n##\n_hop\n")."\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex09/ssap2.php", "");
		//----------------------- EX09------------------------\\
		if (file_exists($argv[1]."ex10/do_op.php"))
		{
			echo "Test ex10\n";
			$op = shell_exec($argv[1]."ex10/do_op.php");
			if ($op == "Incorrect Parameters\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\tCorrection ▼\n'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."' != '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Incorrect Parameters\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex10/do_op.php 1 + 3");
			if ($op == "4\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "4\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex10/do_op.php ' 1' ' +' ' 3'");
			if ($op == "4\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "4\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex10/do_op.php ' 1' ' *' ' 3'");
			if ($op == "3\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "3\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex10/do_op.php ' 6' ' -   ' ' 3'");
			if ($op == "3\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "3\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex10/do_op.php ' 42' ' /  ' ' 2'");
			if ($op == "21\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "21\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex10/do_op.php 42 ' %' 3");
			if ($op == "0\n")
				echo "\tdo_op_ex10\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_ex10\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "0\n")."'\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex10/do_op.php", "");
		//----------------------- EX11------------------------\\
		if (file_exists($argv[1]."ex11/do_op_2.php"))
		{
			echo "Test ex11\n";
			$op = shell_exec($argv[1]."ex11/do_op_2.php");
			if ($op == "Incorrect Parameters\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\t\tCorrection ▼\n'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."' != '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Incorrect Parameters\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex11/do_op_2.php toto");
			if ($op == "Syntax Error\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\t\tCorrection ▼\n'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."' != '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "Syntax Error\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex11/do_op_2.php '42*2'");
			if ($op == "84\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "84\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex11/do_op_2.php '   42  / 2   '");
			if ($op == "21\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "21\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex11/do_op_2.php '  42  - 2'");
			if ($op == "40\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "40\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex11/do_op_2.php '  42  + 2'");
			if ($op == "44\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "44\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex11/do_op_2.php '  42  % 2'");
			if ($op == "0\n")
				echo "\tdo_op_2_ex11\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tdo_op_2_ex11\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t\tCorrection ▼\n  '";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t\t!= \t'";
				echo str_replace(array("\n", "\r"), array('\n', '\r'), "0\n")."'\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex11/do_op_2.php", "");
		//----------------------- EX12------------------------\\
		if (file_exists($argv[1]."ex12/search_it!.php"))
		{
			echo "Test ex12\n";
			$op = shell_exec($argv[1]."ex12/search_it\!.php");
			if ($op == "")
				echo "\tsearch_it!_ex12\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsearch_it!_ex12\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t     Correction ▼\n  ";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t\t!= \t";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex12/search_it\!.php toto");
			if ($op == "")
				echo "\tsearch_it!_ex12\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsearch_it!_ex12\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t     Correction ▼\n  ";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t\t!= \t";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex12/search_it\!.php toto key1:val1 key2:val2 toto:42");
			if ($op == "42\n")
				echo "\tsearch_it!_ex12\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsearch_it!_ex12\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t     Correction ▼\n  ";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "42\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex12/search_it\!.php toto toto:val1 key2:val2 toto:42");
			if ($op == "42\n")
				echo "\tsearch_it!_ex12\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsearch_it!_ex12\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t     Correction ▼\n  ";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "42\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex12/search_it\!.php toto key1:val1 key2:val2 0:hop");
			if ($op == "")
				echo "\tsearch_it!_ex12\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsearch_it!_ex12\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t     Correction ▼\n  ";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t\t!= \t";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex12/search_it\!.php 0 key1:val1 key2:val2 0:hop");
			if ($op == "hop\n")
				echo "\tsearch_it!_ex12\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsearch_it!_ex12\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\t     Correction ▼\n  ";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t!= \t";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "hop\n")."'\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex12/search_it!.php", "");
		//----------------------- EX13------------------------\\
		if (file_exists($argv[1]."ex13/sing_it!.php"))
		{
			echo "Test ex13\n";
			$op = shell_exec($argv[1]."ex13/sing_it\!.php");
			if ($op == "")
				echo "\tsing_it!_ex13\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsing_it!_ex13\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\n";
				echo "Correction ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex13/sing_it\!.php 'mais pourquoi cette demo ?'");
			if ($op == "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n")
				echo "\tsing_it!_ex13\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsing_it!_ex13\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\n";
				echo "Correction ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex13/sing_it\!.php 'mais pourquoi cette chanson ?'");
			if ($op == "Parce que Kwame a des enfants\n")
				echo "\tsing_it!_ex13\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsing_it!_ex13\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\n";
				echo "Correction ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Parce que Kwame a des enfants\n")."'\n\n";
			}
			$op = shell_exec($argv[1]."ex13/sing_it\!.php 'vraiment ?'");
			if ($op == "Nan c'est parce que c'est le premier avril\n" || $op == "Oui il a vraiment des enfants\n")
				echo "\tsing_it!_ex13\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsing_it!_ex13\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\n";
				echo "Correction ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Nan c'est parce que c'est le premier avril\n")."' ||\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Oui il a vraiment des enfants\n")."' )\n\n";
			}
			$op = shell_exec($argv[1]."ex13/sing_it\!.php 'vraiment ?'");
			if ($op == "Nan c'est parce que c'est le premier avril\n" || $op == "Oui il a vraiment des enfants\n")
				echo "\tsing_it!_ex13\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsing_it!_ex13\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\n";
				echo "Correction ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Nan c'est parce que c'est le premier avril\n")."' ||\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Oui il a vraiment des enfants\n")."' )\n\n";
			}
			$op = shell_exec($argv[1]."ex13/sing_it\!.php 'vraiment ?'");
			if ($op == "Nan c'est parce que c'est le premier avril\n" || $op == "Oui il a vraiment des enfants\n")
				echo "\tsing_it!_ex13\t-->\t\033[32mOK\033[0m\n";
			else
			{
				echo "\tsing_it!_ex13\t-->\t\033[31mNOK\033[0m\n";
				echo "You ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\n";
				echo "Correction ▼\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Nan c'est parce que c'est le premier avril\n")."' ||\n";
				echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "Oui il a vraiment des enfants\n")."' )\n\n";
			}
		}
		else
			print_no_file($argv[1]."ex13/sing_it!.php", "");
		//----------------------- EX14------------------------\\
		if (file_exists($argv[1]."ex14/agent_stats.php"))
		{
			echo "Test ex14\n";
			if (file_exists("./peer_notes_1.csv"))
			{
				$op = shell_exec("cat peer_notes_1.csv | ".$argv[1]."ex14/agent_stats.php");
				if ($op == "")
					echo "\taff_param_ex04\t-->\t\033[32mOK\033[0m\n";
				else
				{
					echo "\taff_param_ex04\t-->\t\033[31mNOK\033[0m\n";
					echo "You ▼\tCorrection ▼\n";
					echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."'\t != \t";
					echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "")."'\n\n";
				}
				$op = shell_exec("cat peer_notes_1.csv | ".$argv[1]."ex14/agent_stats.php moyenne");
				if ($op == "9.8621262458472\n")
					echo "\taff_param_ex04\t-->\t\033[32mOK\033[0m (moyenne)\n";
				else
				{
					echo "\taff_param_ex04\t-->\t\033[31mNOK\033[0m (moyenne)\n";
					echo "You ▼\t\t\tCorrection ▼\n";
					echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), $op)."' != ";
					echo "'".str_replace(array("\n", "\r"), array('\n', '\r'), "9.8621262458472\n")."'\n\n";
				}
				$op = shell_exec("cat peer_notes_1.csv | ".$argv[1]."ex14/agent_stats.php moyenne_user");
				if ($op == "adam_e:9.0555555555556\nbertrand_y:7.9473684210526\nbruce_w:9.0434782608696\nclark_k:10.464285714286\ndavid_a:8.68\ndexter_m:8.9\ndidier_f:11.3125\nfrancois_h:12.684210526316\ngeorges_b:9.65\nhans_z:12.4375\nhoward_s:8.6842105263158\njean_t:7.8333333333333\njohn_w:11.294117647059\njoseph_c:8.9375\nlaurent_g:11.882352941176\nleo_g:10.25\nlois_l:12.789473684211\nludovic_k:7.2631578947368\nmaelle_m:7.6842105263158\nmarcel_j:10.818181818182\nmarie_c:9.3333333333333\nmathieu_c:10.086956521739\nmelissa_v:10.526315789474\nmichel_r:14\nnicolas_s:7.3181818181818\nolivier_z:12.625\nroxane_e:7.3913043478261\nsandra_n:11.181818181818\nsteve_j:11.5\ntrevor_r:6.1052631578947\n")
					echo "\taff_param_ex04\t-->\t\033[32mOK\033[0m (moyenne_user)\n";
				else
				{
					echo "\taff_param_ex04\t-->\t\033[31mNOK\033[0m (moyenne_user)\n";
					echo "You ▼\n";
					echo $op."\n!=\n\n";
					echo "Correction ▼\n";
					echo "adam_e:9.0555555555556\nbertrand_y:7.9473684210526\nbruce_w:9.0434782608696\nclark_k:10.464285714286\ndavid_a:8.68\ndexter_m:8.9\ndidier_f:11.3125\nfrancois_h:12.684210526316\ngeorges_b:9.65\nhans_z:12.4375\nhoward_s:8.6842105263158\njean_t:7.8333333333333\njohn_w:11.294117647059\njoseph_c:8.9375\nlaurent_g:11.882352941176\nleo_g:10.25\nlois_l:12.789473684211\nludovic_k:7.2631578947368\nmaelle_m:7.6842105263158\nmarcel_j:10.818181818182\nmarie_c:9.3333333333333\nmathieu_c:10.086956521739\nmelissa_v:10.526315789474\nmichel_r:14\nnicolas_s:7.3181818181818\nolivier_z:12.625\nroxane_e:7.3913043478261\nsandra_n:11.181818181818\nsteve_j:11.5\ntrevor_r:6.1052631578947\n\n";
				}
				$op = shell_exec("cat peer_notes_1.csv | ".$argv[1]."ex14/agent_stats.php ecart_moulinette");
				if ($op == "adam_e:3.0555555555556\nbertrand_y:-1.0526315789474\nbruce_w:-9.9565217391304\nclark_k:0.46428571428571\ndavid_a:-7.32\ndexter_m:1.9\ndidier_f:-0.6875\nfrancois_h:-0.31578947368421\ngeorges_b:-9.35\nhans_z:9.4375\nhoward_s:-0.31578947368421\njean_t:-2.1666666666667\njohn_w:-1.7058823529412\njoseph_c:-3.0625\nlaurent_g:-4.1176470588235\nleo_g:4.25\nlois_l:6.7894736842105\nludovic_k:-7.7368421052632\nmaelle_m:-10.315789473684\nmarcel_j:3.8181818181818\nmarie_c:-4.6666666666667\nmathieu_c:-5.9130434782609\nmelissa_v:7.5263157894737\nmichel_r:9\nnicolas_s:-10.681818181818\nolivier_z:3.625\nroxane_e:-9.6086956521739\nsandra_n:2.1818181818182\nsteve_j:10.5\ntrevor_r:-12.894736842105\n")
					echo "\taff_param_ex04\t-->\t\033[32mOK\033[0m (ecart_moulinette)\n";
				else
				{
					echo "\taff_param_ex04\t-->\t\033[31mNOK\033[0m (ecart_moulinette)\n";
					echo "You ▼\n";
					echo $op."\n!=\n\n";
					echo "Correction ▼\n";
					echo "adam_e:3.0555555555556\nbertrand_y:-1.0526315789474\nbruce_w:-9.9565217391304\nclark_k:0.46428571428571\ndavid_a:-7.32\ndexter_m:1.9\ndidier_f:-0.6875\nfrancois_h:-0.31578947368421\ngeorges_b:-9.35\nhans_z:9.4375\nhoward_s:-0.31578947368421\njean_t:-2.1666666666667\njohn_w:-1.7058823529412\njoseph_c:-3.0625\nlaurent_g:-4.1176470588235\nleo_g:4.25\nlois_l:6.7894736842105\nludovic_k:-7.7368421052632\nmaelle_m:-10.315789473684\nmarcel_j:3.8181818181818\nmarie_c:-4.6666666666667\nmathieu_c:-5.9130434782609\nmelissa_v:7.5263157894737\nmichel_r:9\nnicolas_s:-10.681818181818\nolivier_z:3.625\nroxane_e:-9.6086956521739\nsandra_n:2.1818181818182\nsteve_j:10.5\ntrevor_r:-12.894736842105\n\n";
				}
			}
			else
				print_no_file($argv[1]."peer_notes_1.csv", "\t");
		}
		else
			print_no_file($argv[1]."ex14/agent_stats.php", "");
	}
	else
		echo "option error:\nexemples: ./correct_d01.php /tmp/d01/\n";
?>