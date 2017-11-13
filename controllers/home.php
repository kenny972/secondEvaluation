
<?php 
	

	require_once('../model/AccountManager.php');//attach my folders and files to read
	require_once('../model/Account.php');//attach my folders and files to read


			// 1) Loading classes and tools needed
	$Manager = new AccountManager();//creat a new object

		if (isset($_POST['username']) AND isset($_POST['credit'])){ //create a condition to retrieve seizures in the "homeView" in the modal

				// creat a new object
			$account = new Account($_POST);//recover the input with the post method

			$Manager->add($account);//Add the variable $account
			}
			$vueaccount = $Manager->getAccountInBdd();//recover what is in the database


					// Condition for delete a account
			if (isset($_POST['deleteaccount']))//I get my data in my file with the post method
			{
  			$Manager->deleteAccount($_POST['deleteaccount']);
  			header('Location:home.php');
			}



		// 2) View of my Application
			
	include "../views/homeView.php";
			
?>






<!-- // $donnees -->