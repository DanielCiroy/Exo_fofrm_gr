<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <?php
   
     $prenom=htmlspecialchars($_POST['prenom']);
     $nom=htmlspecialchars($_POST['nom']);
     $pseudo=htmlspecialchars($_POST['pseudo']);
   ?>
   <h2>bienvenue sur la page target mr <?php echo $prenom ;?></h2>
   <?php
     echo'votre prenom est :'.$prenom.'. <br/>';
     echo'votre nom est :'.$nom.'. <br/>';
     echo'et votre pseudo c\'est :'.$pseudo.'.';
   

  
   /*

     function securisation($donnee){
        $donnee=htmlspecialchars($donnee);
        return donnee;
     }

     $prenom=securisation($_POST['prenom']);
     $nom=securisation($_POST['nom']);
     $pseudo=securisation($_POST['pseudo']);

    
   */
   
   ?>
  
   
   
</body>
</html>