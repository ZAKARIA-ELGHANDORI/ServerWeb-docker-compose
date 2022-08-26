<?php 
session_start();
include_once('Connection.php'); 
$login=$_GET['nom'];
$password=$_GET['password'];
$prenom=$_GET['prenom'];
$email=$_GET['email'];
$sql ="INSERT INTO `users` (`login`, `password`) values ('$_GET[nom]' , '$_GET[password]')";
$sth = $cnx->query($sql);
?>

<h1>Bonjour </h1>
<h3> Votre nom est : <?php echo $_GET['nom'] ?> </h3>  
<h3> Votre prenom est : <?php echo $_GET['prenom'] ?> </h3>  
<h3> Votre email est : <?php echo $_GET['email'] ?> </h3>  
<h3> Votre password est : <?php echo $_GET['password'] ?> </h3>  

<h4><a href="Formulaire.php">Retourner a la page d'inscriptions</a></h4>

 <h3><a href="logout.php" style="border : 1px solid black; padding : 4px; text-decoration : none; margin-left: 3cm;
      background-color : #FF0000;">LOGOUT</a></h3>


   
   