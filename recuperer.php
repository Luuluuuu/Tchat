<?php
    require_once('connexionBD.php');

    $linkpdo = connexion();
    $req = 'SELECT M.* FROM (SELECT * FROM chat ORDER BY HoraireChat DESC LIMIT 10) M ORDER BY M.HoraireChat ASC LIMIT 10';
    $res = $linkpdo->prepare($req);
    $res->execute();

    if ($res !== false) {
        foreach ($res as $row) {
            echo "<div class=\"bulle2\">" . $row["AuteurChat"] . " : " . $row["ContenuChat"] . '</div>';
            echo "<div class=\"heure2\">" . $row["HoraireChat"] . "</div>";
        }
    }
    deconnexion($linkpdo);
?>