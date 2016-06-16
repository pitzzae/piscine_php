<?php
	session_start();
	if (isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] != "" && isset($_SESSION['panier']) && isset($_POST['cmd']) && count($_SESSION['panier']) > 0)
	{
		$is_add = false;
		$new_commande = array();
		$_SESSION['panier']['date'] = time();
		$_SESSION['panier']['login'] = $_SESSION['loggued_on_user'];
		if (file_exists("../data/commandes") == 1)
		{
			$new_commande = unserialize(file_get_contents("../data/commandes"));
			$new_commande[] = $_SESSION['panier'];
			file_put_contents("../data/commandes", serialize($new_commande));
		}
		else
		{
			$new_commande[] = $_SESSION['panier'];
			file_put_contents("../data/commandes", serialize($new_commande));
		}
		$_SESSION['panier'] = array();
		echo "OK;Félicitations votre commande est confirmée.";
	}
	else
	{
		if (count($_SESSION['panier']) == 0)
			echo "ERROR;Votre panier est vide !!!";
		else
			echo "ERROR;Merci de vous connecter !!!";
	}
?>