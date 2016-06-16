<?php
	session_start();
	$file = file_get_contents("../data/user");
	if (isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] != "" && $file != "")
	{
		$account_list = unserialize($file);
		$newaccount_list = array();
		$key_tmp = 0;
		$del_account = false;
		foreach($account_list as $key => $value)
		{
			if ($value["login"] != $_SESSION['loggued_on_user'])
			{
				$newaccount_list[$key_tmp] = $value;
				file_put_contents("../data/user", serialize($newaccount_list));
			}
			else
				$del_account = true;
		}
		if ($del_account == true)
		{
			echo "OK;Compte Supprimé avec succès";
			$_SESSION['loggued_on_user'] = "";
			$_SESSION['admin_state'] = 0;
		}
		else
			echo "ERROR;Compte Inexistant";
	}
	else
		echo "ERROR;Compte Inexistant";
?>