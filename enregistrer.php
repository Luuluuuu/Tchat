<?php
    require_once("connexionBD.php");

    $linkpdo = connexion();

    $req = "INSERT INTO chat (HoraireChat, AuteurChat, ContenuChat)
    VALUES (NOW(), ?, ?)";
    $res = $linkpdo->prepare($req);
    $res->execute(array($_GET["pseudo"], $_GET["phrase"]));

    deconnexion($linkpdo);
?>