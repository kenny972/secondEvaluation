<?php

Class AccountManager //creation of my class
{


            // connection to my database//
  public function connect()
    {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Bank;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    return $bdd;
    }


                // Add my Creat Read Update Delete (CRUD)
    public function add($choice)
    {
        $q = $this->connect()->prepare('INSERT INTO User (username,credit) VALUES (:username,:credit)');
        $q->bindValue(':username', $choice->getUsername(),PDO::PARAM_STR);
        $q->bindValue(':credit', $choice->getCredit(),PDO::PARAM_STR);
        $q->execute();
    }


        // Get a account in my BDD for my HomeView
    public function getAccountInBdd()
    {
        $Account=[]; //the board is waiting to receive something
        $q = $this->connect()->query('SELECT * FROM User');
        foreach ($q as $donnees)//I order that a query be made to my table User
        {
        $Account[] = new Account($donnees); //$Account it is waiting to receive something
        }
        return $Account; //$Account it sends what he has received
    }


            // Get a account in BDD for my AccountVue

    public function GetVueAccount($id)
    {
        $req = $this->connect()->prepare('SELECT * FROM User WHERE id=?');//I order to prepare myself what is in my BDD with where is my id
         $req ->execute(array($id));
         $donnees= $req->fetch();
         $accountbank = new Account($donnees);
         return $accountbank;
    }


            // my methode delete product
    public function deleteAccount($id_delete)
    {
        $req =  $this->connect()->prepare('DELETE FROM User
          WHERE id=? ');//I order to prepare myself what is in my BDD with the id to erase it
        $req ->execute(array($id_delete));//I order that the id be erased
    }

            // my methode update
    public function update($compte)
    {
        $req=$this->connect()->prepare('UPDATE User SET id = :id, username= :username, credit= :credit WHERE id= :id');
        $req->execute(array(
      'id'=>$compte->getId(),
      'username'=>$compte->getUsername(),
      'credit'=>$compte->getCredit()));
    }




} //end of my classe

?> 
<!-- end of my php -->

