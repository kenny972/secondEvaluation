<?php
	require_once('../model/AccountManager.php');//attach my folders and files to read
	require_once('../model/Account.php');//attach my folders and files to read




	$Manager = new AccountManager();
	$giver = $Manager->GetVueAccount($_POST['from']);
	$recever = $Manager->GetVueAccount($_POST['to']);
	$transfer = ($_POST['additional']);
	$giver->minousCredit($transfer);
	$recever->addCredit($transfer);
	var_dump($giver);
	var_dump($recever);


	header('location:home.php');//revient vers ma page
?>