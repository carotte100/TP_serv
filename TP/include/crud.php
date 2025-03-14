<?php
require('connexion.php');


function list_wintons($CONNEXION)
{
    $sql = "SELECT * FROM winton";
    $res = mysqli_query($CONNEXION, $sql);
    return rs_to_tab($res);
}

function rs_to_tab($rs)
{
    $tab = [];
    while ($row = mysqli_fetch_assoc($rs)) {
        $tab[] = $row;
    }
    return $tab;
}


?>