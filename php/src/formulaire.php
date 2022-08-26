<?php 
 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{ 
            font-family: 'Times New Roman', Times, serif;
        }
        span{ 
          color : #FF0000;
        }
    </style>
    <title>Formulaire</title>
</head>
<body>
    <form action="Affichage.php" method="GET" id="Myform">
    <hr>
     <img src="jmeter-tutorial.png" alt="" style="float : left ; width 2cm ; height :2cm">
     <img src="jmeter-tutorial.png" alt="" style="float : right ; width 2cm ; height :2cm">
      <h1 align="center">FORMULAIRE</h1>
    <hr>  <br>
     <div style="margin-left: 1cm;">
      <label for="nom">Nom :</label> <p></p>
      <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom.." 
         style="width : 10cm ; margin-left: 1cm;"> <span id="E1"></span>

         <br>

      <label for="prenom">Prénom :</label> <p></p>
      <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre Prenom.." 
       style="width : 10cm ; margin-left: 1cm;"> <span id="E2"></span>

         <br>

      <label for="email">email :</label> <p></p>
      <input type="email" id="email" name="email" class="form-control" placeholder="Votre email.." 
       style="width : 10cm ; margin-left: 1cm;"><span id="E4"></span>

        <br>

      <label for="age">password :</label> <p></p>
      <input type="password" id="age" name="password" class="form-control" placeholder="Votre password.." 
      style="width : 10cm ; margin-left: 1cm;"> <span id="E3"></span>


      <br>
       
      <br>

      <button type="button" class="btn btn-success" id="Valider" name="Valider">Valider</button>

          

      <input type="submit" class="btn btn-primary" value="SUBMIT" style="margin-right: 2cm;">


      <!-- <input type="submit" class="btn btn-primary" value="SUBMIT" style="margin-right: 2cm;"> -->
      
      <!-- <input type="reset"  class="btn btn-success" value="RESET"> -->

      <hr>
    </div>
</form>
   <script>
          let nom=document.getElementById('nom');
          let prenom=document.getElementById('prenom');
          let email=document.getElementById('email');
          let age=document.getElementById('age');
          let Valider=document.getElementById('Valider');

          Valider.addEventListener('click' , function(e){ 

            if(nom.value.length <= 1) { 
              document.getElementById('E1').innerText="La taille du nom doit etre supérieur à 1 caractéres";
              nom.focus();
            } else { 
                document.getElementById('E1').innerText="";
                  }
            if(prenom.value.length <= 1) { 
              document.getElementById('E2').innerText="La taille du prénom doit etre supérieur à 1 caractéres";
            } else { 
                document.getElementById('E2').innerText="";
                  }

                  if(email.value.length==0) { 
                document.getElementById('E4').innerText="Vous n'avez pas entrer votre email !!";
             } else { 
                document.getElementById('E4').innerText="";
                  }

            if(Age.value <5 || Age.value >40) { 
                document.getElementById('E3').innerText="l'age doit étre compris entre 5 et 40 !!";
             } else { 
                document.getElementById('E3').innerText="";
                  }
          });


   </script>
    
    
</body>
</html>