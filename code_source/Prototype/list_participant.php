<?php
require("participants.php");
$participantList = [];
$participant = new participants();
$participant -> nom = "Ahmad";
$participant -> prenom = "Alami";
$participantList [] = $participant;

$participantList_json =  json_encode($participantList);

echo $participantList_json;

?>


