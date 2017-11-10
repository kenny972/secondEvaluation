<?php

class UserManager
{

 //Method that returns the connection to the database
	public function getDb()
	{
    	$db = new PDO('mysql:host=localhost;dbname=Bank', "root", "root");
    	return $db;
	}

// Method that retrieves the data in my database
	function showTheCount()
	{
		$sql = "SELECT * FROM User";
			$req = mysql_query($sql);
				while($data = mysql_fetch_assoc($req))
				{
				$array[]=$data;
				}
				return $array;
	}


}



?>