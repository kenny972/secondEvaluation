<?php

Class AccountManager{


                // ma fonction de connexion//
  public function connect(){
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


                // ADD ACCOUNT IN BDD
public function add($choice){
$q = $this->connect()->prepare('INSERT INTO User (username,credit) VALUES (:username,:credit)');
$q->bindValue(':username', $choice->getUsername(),PDO::PARAM_STR);
$q->bindValue(':credit', $choice->getCredit(),PDO::PARAM_STR);
$q->execute();
}


        // GET ACCOUNT IN BDD FOR MY HOME VUE
public function getAccountInBdd(){
     $Account=[];
     $q = $this->connect()->query('SELECT * FROM User');
     foreach ($q as $donnees) {
       $Account[] = new Account($donnees);
     }

return $Account;


}


            // GET ACCOUNT IN BDD FOR MY ACCOUNT VUE

public function GetVueAccount($id){
 $req = $this->connect()->prepare('SELECT * FROM User WHERE id=?');
 $req ->execute(array($id));
 $donnees= $req->fetch();
 $accountbank = new Account($donnees);
 return $accountbank;
}


            // my methode delete product
public function deleteAccount($id_delete){
  $req =  $this->connect()->prepare('DELETE FROM User
      WHERE id=? ');
$req ->execute(array($id_delete));
}

// ---------------methode update
  // -------------------------------
  public function update($compte){
    $req=$this->connect()->prepare('UPDATE User SET id = :id, username= :username, credit= :credit WHERE id= :id');
    $req->execute(array(
      'id'=>$compte->getId(),
      'username'=>$compte->getUsername(),
      'credit'=>$compte->getCredit()));

}

}



?>

<!-- $donnees -->