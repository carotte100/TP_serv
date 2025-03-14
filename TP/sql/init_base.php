<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE winton(
    id INT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prix INT NOT NULL,
    date_de_sortie DATE NOT NULL,
    note_moyenne DECIMAL(10, 2) NOT NULL,
    CONSTRAINT pk_winton PRIMARY KEY (id));";
 $pdo->exec($sql);
 echo "Table winton created successfully.";
} catch (PDOException $e) {
 echo "Error: " . $e->getMessage();
}
?>