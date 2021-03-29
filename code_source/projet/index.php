<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src='main-Js.js'></script>
</head>
<body>
    <section>
        <form action="traitement.php" method="post">
        <div id="div-form">
            
            <h3 id="Remplire-champs">Remplire les champs s'il vous plait :</h3>
            <div >
                <label >Nom:</label>  
                <input id="txtNom" name="nom" type="text">
            </div>
            <div id="top">
                <label >Prénom:</label>  
                <input id="txtPrenom" name="prenom" type="text" >
            </div>
            <div id="top">
                <label >Adress:</label>  
                <input id="txtAdress" name="adress" type="text" >
            </div>
            <div id="top">
                <label >Telephone:</label>  
                <input id="txtTelephone" name="tele" type="tel" >
            </div>
            <div id="top">
                <label >Email:</label>  
                <input id="txtEmail" name="email" type="email"  >
            </div>
            <div>
                <input id="btnEnregistrer" type="submit" value="Enregistrer" onclick="enregistrer()">
                <a href="traitement.php" target="_blank"><input id="consulter" type="button" value="Consulter" ></a>
                
                <!-- <input type="submit" value="Valider" id="valider"> -->
                <!-- <button id="btnEnregistrer" onclick="enregistrer()">Enregistrer</button> -->
            </div>     
             
        </div>
        </form>
    </section>
</body>
</html>