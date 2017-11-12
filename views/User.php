<?php

class User //I declare here my class
{
			// I declare here my attributes	
	protected $Id;
	protected $FirstName;
	protected $LastName; 
  	protected $Amount;	

  			//The Setters
	public function setId($Id)
	{
		$this->Id = $Id;
	}

	public function setFirtName($FirstName)
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


			// The Getters
	public function getId($Id)
	{
		$this->Id = $Id;
	}

	public function getFirtName($FirstName)
	{
		$this->FirstName = $FirstName;
	}

	public function getLastName($LastName)
	{
		$this->LastName = $LastName;
	}

	public function getAmount($Amount)
	{
		$this->Amount = $Amount;
	}

		// function contruct with the hydratation
  	// public function __construct(array $data)
  	// {
  	// 	$this->hydrate($data);
  	// }


}
?>


