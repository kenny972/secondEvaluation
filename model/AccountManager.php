<?php

class AccountManager
{

 //Method that returns the connection to the database
	public function getDb()
	{
    	$db = new PDO('mysql:host=localhost;dbname=Bank', "root", "root");
    	// catch(Exception $e)
    // {
            // die('Erreur : '.$e->getMessage());
    // }
    	return $db;
	}

	// add a account in my bdd

	public function add($account){
  $q = $this->getDb()->prepare('INSERT INTO User (username,credit) VALUES (:username,:credit)');
  $q->bindValue(':username', $account->getUsername(),PDO::PARAM_STR);
  $q->bindValue(':credit', $account->getCredit(),PDO::PARAM_STR);
  $q->execute();
}
	
}



?>