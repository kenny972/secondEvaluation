<?php
	require_once('../model/AccountManager.php');//attach my folders and files to read
	require_once('../model/Account.php');//attach my folders and files to read




	$manager = new AccountManager(); //i declare a new object
	$giver = $manager->GetVueAccount($_POST['from']);//new object $giver receives the informations contained in $Manager//recovery of what is in the form
	$recever = $manager->GetVueAccount($_POST['to']);//new object $giver receives the informations contained in $Manager//recovery of what is in the form with the help of the method
	$transfer = ($_POST['additional']);//recovery of what is in the form with the help of the method
	$giver->minousCredit($transfer);//recovery of what is in the form with the help of variable $transfer
	$recever->addCredit($transfer);//add a credit with in the variable $transfer
	$manager->update($giver);
	$manager->update($recever);
	


	
	header('location:home.php');//return to my home.php
?>

