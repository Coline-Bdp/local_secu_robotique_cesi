<?php 

try {
        $pdo = New PDO('mysql:host=localhost;dbname=commevousvoulez;charset=utf8','di','di');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = "SELECT id_valid FROM badge_valid WHERE id_valid = :id_scan ";

    $stmt = $pdo->prepare($sql);

    $id_scan = 12;

    $stmt ->bindParam(':id_scan', $id_scan);

    $result = $stmt->execute();

    if($stmt->rowCount() > 0)   {
        echo "Carte dans la DB\n";
    }else   {
        echo "Carte non reconnu\n";
    }
    
    if ($result)    {
        echo "Pas problème \n";
    } else{
        echo "Problème \n" . $stmt->errorInfo()[2];
    }
?>