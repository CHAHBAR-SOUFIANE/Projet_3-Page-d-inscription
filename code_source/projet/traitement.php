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
 //Adress
if( isset( $_SESSION['liste_adressS'] ) ) {
    $liste_adress =  $_SESSION['liste_adressS'] ;
 }else {
   $_SESSION['liste_adressS'] =  $liste_adress;
 }
  //Telephone
if( isset( $_SESSION['liste_teleS'] ) ) {
    $liste_tele =  $_SESSION['liste_teleS'] ;
 }else {
   $_SESSION['liste_teleS'] =  $liste_tele;
 }
   //Email
if( isset( $_SESSION['liste_emailS'] ) ) {
    $liste_email =  $_SESSION['liste_emailS'] ;
 }else {
   $_SESSION['liste_emailS'] =  $liste_email;
 }


  // Ajouter le nom et email dans le tableau
$liste_nom[] = $_POST["nom"];
$liste_prenom[] = $_POST["prenom"];
$liste_adress[] = $_POST["adress"];
$liste_tele[] = $_POST["tele"];
$liste_email[] = $_POST["email"];
 

  // Enregistrer le tableau dans la session
$_SESSION['liste_nomS'] =  $liste_nom;
$_SESSION['liste_prenomS'] =  $liste_prenom;
$_SESSION['liste_adressS'] =  $liste_adress;
$_SESSION['liste_teleS'] =  $liste_tele;
$_SESSION['liste_emailS'] =  $liste_email;

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

th{
    background-color:white;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

h2{
    font-size:2rem;
}

@media print{
    h2{
        display:none;
    }

}

input{
    margin:2rem 2rem 2rem 0;
}
</style>
</head>
<body>

<h2>list des participants : </h2>

<table border="2">
        <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>Adress</th>
                <th>Telephone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //affichage des participant
        for ($i=0; $i <sizeof($liste_nom); $i++){
     
        echo "<tr>";
        echo "<td>".$liste_nom[$i]."</td>";
        echo "<td>".$liste_prenom[$i]."</td>";
        echo "<td>".$liste_adress[$i]."</td>";
        echo "<td>".$liste_tele[$i]."</td>";
        echo "<td>".$liste_email[$i]."</td>";
        echo "<tr>";
        
        }

    ?>  
        </tbody>
    </table>
    <input id="print" type="button" value="Imprimer" onclick="window.print()">
   
</body>

</html>

<?php
    
 ?>