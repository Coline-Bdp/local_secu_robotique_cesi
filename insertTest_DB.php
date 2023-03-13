<?php 

try {
        $pdo = New PDO('mysql:host=localhost;dbname=commevousvoulez;charset=utf8','di','di');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = "INSERT INTO badge_scan (id_scan,heure)
    VALUES(:id_scan, UNIX_TIMESTAMP(NOW()))";

    $stmt = $pdo->prepare($sql);

    $id_scan = htmlspecialchars($_GET["id"]);

    $stmt ->bindParam(':id_scan', $id_scan);

    $result = $stmt->execute();
    
    $sql = "SELECT id_valid FROM badge_valid WHERE id_valid = :id_scan ";

    $stmt = $pdo->prepare($sql);

    $id_scan = htmlspecialchars($_GET["id"]);

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