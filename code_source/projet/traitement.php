<?php
//initialisation du session
session_start();

//initialisation de tableau des participants
// $list_participants2=[];

 // Trouver ou créer le tableau dans Session
 //nom
 if( isset( $_SESSION['liste_nomS'] ) ) {
    $liste_nom =  $_SESSION['liste_nomS'] ;
 }else {
    $_SESSION['liste_nomS'] =  $liste_nom;
 }
//prenom
if( isset( $_SESSION['liste_prenomS'] ) ) {
    $liste_prenom =  $_SESSION['liste_prenomS'] ;
 }else {
    $_SESSION['liste_prenomS'] =  $liste_prenom;
 }


  // Ajouter le nom et email dans le tableau
 @ $liste_nom[] = $_GET["nom"];
 @ $liste_prenom[] = $_GET["prenom"];
 

  // Enregistrer le tableau dans la session
$_SESSION['liste_nomS'] =  $liste_nom;
$_SESSION['liste_prenomS'] =  $liste_prenom;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
 Formulaire v2
</title>
</head>
<body>

<h1>la listes des participants</h1>
<ul> 
    <?php 
    for ($i=0; $i <sizeof($liste_nom); $i++){
        ?>
    
        <li><?php echo  $liste_nom[$i]."&nbsp".$liste_prenom[$i]?></li>
        <?php
        }
    ?>  
    

   


</ul>
</body>

</html>