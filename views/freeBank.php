<?php
  	include("template/header.php"); //include the header
  	include("Manager.php");
?>

<?php
	$Personn1 = new UserManager();
	$Personn1->getDb();
	$Users = $User->showTheCount();

  ?>


<br><br>
<table style="background-color: #868789;" class="table table-inverse">
 
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name
      		
    </th>
      <th>Last Name
      		
    </th>
      <th>Account
      	 	
      </th>
    </tr>
  </thead>

   
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>




	 			<!-- <a href="#" class="btn btn-info">Edit</a>
	 			
	 			<a href="#" class="btn btn-info">Delete</a> -->
	 		


 		
 	