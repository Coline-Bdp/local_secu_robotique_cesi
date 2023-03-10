<?php 

try {
        $pdo = New PDO('mysql:host=localhost;dbname=commevousvoulez;charset=utf8','di','di');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = "SELECT id FROM badge_valid WHERE id_valid = :id_scan ";

    $stmt = $pdo->prepare($sql);

    $id_scan = 12;

    $stmt ->bindParam(':id_scan', $id_scan);

    $result = $stmt->execute();
    
    if ($result)    {
        echo "C'est good \n";
    } else{
        echo "Pas good \n" . $stmt->errorInfo()[2];
    }
?>