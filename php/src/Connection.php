<?php 

$username=""; 
  
$pass="root";
 
$host="107.20.27.211:8082"; 
    
$db="ADV"; 
   
$dsn="mysql:host=$host;dbname=$db";
$cnx= new PDO($dsn , $username , $pass); 

try { 
    $cnx= new PDO($dsn , $username , $pass);
    if($cnx) {
        echo ""; 
    }
} catch(PDOEXception $e) {
    $error_cnx = $e->getMessage(); 
    echo $error_cnx;
    echo " ";
    echo "May your server is off or ur data is incorrecte";
    exit();
   } 


?>
