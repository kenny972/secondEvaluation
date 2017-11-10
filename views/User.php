<?php

class User //I declare here my class
{
	protected $FirstName;
	protected $LastName; // I declare here my attributes
  	protected $Amount;	// I declare here my attributes		


	public function setFirstName($FirstName)//The Setters
	{
		$this->FirstName = $FirstName;
	}

	public function setLastName($LastName)
	{
		$this->LastName = $LastName;
	}

	public function setAmount($Amount)
	{
		$this->Amount = $Amount;
	}


}

$data = [
"LastName"=>"Kenny",
"FirstName"=>"GENLY",
"Amount"=>0,

];

$Person = new user($data);
var_dump($data);

?>