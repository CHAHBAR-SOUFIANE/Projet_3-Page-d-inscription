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
   @ $_SESSION['liste_nomS'] =  $liste_nom;
 }
//prenom
if( isset( $_SESSION['liste_prenomS'] ) ) {
    $liste_prenom =  $_SESSION['liste_prenomS'] ;
 }else {
   @ $_SESSION['liste_prenomS'] =  $liste_prenom;
 }


  // Ajouter le nom et email dans le tableau
 @ $liste_nom[] = $_POST["nom"];
 @ $liste_prenom[] = $_POST["prenom"];
 

  // Enregistrer le tableau dans la session
$_SESSION['liste_nomS'] =  $liste_nom;
$_SESSION['liste_prenomS'] =  $liste_prenom;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' type='text/css' href='style.css'>
<title>
 Formulaire v2
</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>la listes des participants</h1>

<table border="2">
        <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        for ($i=0; $i <sizeof($liste_nom); $i++){
     
        echo "<tr>";
        echo "<td>".$liste_nom[$i]."</td>";
        echo "<td>".$liste_prenom[$i]."</td>";
        echo "</tr>";
        
        }
    ?>  
        </tbody>
    </table>


   



</body>

</html>

