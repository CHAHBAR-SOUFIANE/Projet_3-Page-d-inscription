<!doctype html>
<html lang="en">
  <head>
    <title>List des participants</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

  </head>
  <body>
      <div id="af"></div>




<script>
$.get("list_participant.php", function(data){
    var apprenants = JSON.parse(data);
    apprenants.forEach(participant => {
        var affichage =  $("<p></p>")
                .text(participant.nom + "," + participant.prenom );
        $("#af").append(affichage);
    });
});
</script>
   
    
  </body>
</html>



















