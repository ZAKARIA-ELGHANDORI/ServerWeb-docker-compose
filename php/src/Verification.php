 
<?php 
 session_start();
 include_once('Connection.php'); 
 

$sql ='SELECT * FROM `users` ';
//Recherche des données
$sth = $cnx->query($sql);
// On voudrait les résultats sous la forme d’un tableau associatif
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if(isset($_GET['submit']) AND isset($_GET['login']) AND isset($_GET['password']))  : ?>
 
      <?php
           $username=$_GET['login'];
           $password=$_GET['password']
        ?>
            <?php foreach($result as $row) { ?>
          <?php  if(($_GET['login']==$row['login']) AND ($_GET['password']==$row['password'])) : ?>
               <?php 
                  $_SESSION['login']=$username;
                  $_SESSION['password']=$password;
               header('Location: formulaire.php');
                 break;   
                 ?> 
                
                   <?php else : ?>
                     <?php header('Location: PageLogin.php');                      
                    ?>
                    
                     
                        

          <?php endif; ?>
             
      <?php } ?>   
<?php endif; ?>

