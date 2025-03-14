<?php

$sql = "CREATE TABLE winton(
    id INT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prix INT NOT NULL,
    date_de_sortie DATE NOT NULL,
    note_moyenne DECIMAL(10, 2) NOT NULL,
    CONSTRAINT pk_winton PRIMARY KEY (id));";

?>