<?php 
	declare(strict_types=1);
	require_once('../model/AccountManager.php');
	require_once('../model/Account.php');

			// 1) Loading classes and tools needed
	$Manager = new AccountManager();
		if (isset($_POST['username']) AND isset($_POST['credit'])){
				// creat a new account
			$account = new Account($_POST);

			$Manager->add($account);	
			}











			// 2) Application logic (The conditions, The variables, transformations...)










		// 3) View of my Application
include "../views/homeView.php";
?>






