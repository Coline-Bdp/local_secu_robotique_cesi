<?php 

$db = New PDO('mysql:host=localhost;dbname=commevousvoulez;charset=utf8','di','di');


    $s = "INSERT INTO badge_scan (id_scan,heure)
    VALUES(:id_scan,:heure)";

    $sql = "SELECT id FROM badge_valid WHERE id_valid = :id_scan ";
    $stmt = $db->prepare($sql); 
    $stmt = $db->prepare($s); 
    $stmt ->bindParam(":id_scan", $id_scan);
    $stmt->bindParam(":heure", $heure);

    $stmt->execute();
    $resultats = $stmt->fetchAll();


?>