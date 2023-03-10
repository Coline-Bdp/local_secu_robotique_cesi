<?php 

$db = New PDO('mysql:host=localhost;dbname=commevousvoulez;charset=utf8','di','di');


    $s = "INSERT INTO badge_scan (id_scan,heure)
    VALUES(:id_scan, UNIX_TIMESTAMP(NOW)";

  
    $stmt = $db->prepare($s); 
    $stmt ->bindParam(":id_scan", $id_scan);

    $stmt->execute();

?>
