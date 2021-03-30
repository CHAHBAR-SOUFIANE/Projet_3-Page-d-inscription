<?php
//initialisation du session
session_start();

//initialisation de tableau des participants
// $list_participants2=[];

 // Trouver ou créer le tableau dans Session
 //nom
 if( isset( $_SESSION['liste_nomS'] ) ) {
    $liste_nom =  $_SESSION['liste_nomS'] ;
 }elseif(isset($liste_nom)) {
   $_SESSION['liste_nomS'] =  $liste_nom;
 }
//prenom
if( isset( $_SESSION['liste_prenomS'] ) ) {
    $liste_prenom =  $_SESSION['liste_prenomS'] ;
 }elseif(isset($liste_prenom)) {
   $_SESSION['liste_prenomS'] =  $liste_prenom;
 }
 //Adress
if( isset( $_SESSION['liste_adressS'] ) ) {
    $liste_adress =  $_SESSION['liste_adressS'] ;
 }elseif(isset($liste_adress)) {
   $_SESSION['liste_adressS'] =  $liste_adress;
 }
  //Telephone
if( isset( $_SESSION['liste_teleS'] ) ) {
    $liste_tele =  $_SESSION['liste_teleS'] ;
 }elseif(isset($liste_tele)) {
   $_SESSION['liste_teleS'] =  $liste_tele;
 }
   //Email
if( isset( $_SESSION['liste_emailS'] ) ) {
    $liste_email =  $_SESSION['liste_emailS'] ;
 }elseif(isset($liste_email)) {
   $_SESSION['liste_emailS'] =  $liste_email;
 }


  // Ajouter le nom et email dans le tableau
  if (isset($_POST["nom"])||isset($_POST["prenom"])||isset($_POST["adress"])||isset($_POST["tele"])||isset($_POST["email"])) {
    $liste_nom[] = $_POST["nom"];
    $liste_prenom[] = $_POST["prenom"];
    $liste_adress[] = $_POST["adress"];
    $liste_tele[] = $_POST["tele"];
    $liste_email[] = $_POST["email"];
     
  }


  // Enregistrer le tableau dans la session
  if (isset($liste_nom)&&isset($liste_prenom)&&isset($liste_adress)&&isset($liste_tele)&&isset($liste_email) ){
    $_SESSION['liste_nomS'] =  $liste_nom;
    $_SESSION['liste_prenomS'] =  $liste_prenom;
    $_SESSION['liste_adressS'] =  $liste_adress;
    $_SESSION['liste_teleS'] =  $liste_tele;
    $_SESSION['liste_emailS'] =  $liste_email;
  }


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

/* tr {
  background-color: #dddddd;
} */

h2{
    font-size:2rem;
}

@media print{
    h2,.btns{
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
        if (empty($liste_nom)) {
          echo "Aucun participant a enregistrer ";
        }else {
          $j=0;
          for ($i=0; $i <sizeof($liste_nom); $i++){     
          if($j==0){
            echo "<tr style='  background-color: #dddddd;'>";
            echo "<td>".$liste_nom[$i]."</td>";
            echo "<td>".$liste_prenom[$i]."</td>";
            echo "<td>".$liste_adress[$i]."</td>";
            echo "<td>".$liste_tele[$i]."</td>";
            echo "<td>".$liste_email[$i]."</td>";
            echo "<tr>";
            $j++;
          }else{
              echo "<tr style='  background-color: #eeeeee;'>";
              echo "<td>".$liste_nom[$i]."</td>";
              echo "<td>".$liste_prenom[$i]."</td>";
              echo "<td>".$liste_adress[$i]."</td>";
              echo "<td>".$liste_tele[$i]."</td>";
              echo "<td>".$liste_email[$i]."</td>";
              echo "<tr>";
              $j=0;
            }       
            }
        }
      

    ?>  
        </tbody>
    </table>
    <div class="btns">
    <input id="print" type="button" value="Imprimer" onclick="window.print()">
    <a href="index.php"><input href="" type="button" value="Retour"></a>
    
    <input type="button" value="Fermer" onclick="window.close()">
    </div>
    
   <script>
    //  var background=document.getElementsByTagName("tr").style.backgroundColor;
    //  if (background=="#dddddd") {
    //   document.getElementsByTagName("tr").style.background="#eaeaea";
    //  }else{
    //   document.getElementsByTagName("tr").style.background="#dddddd";
    //  }
    var background=document.getElementsByName()("tr");
        background.style.backgroundColor="red";

   </script>
</body>

</html>

<?php
    
 ?>