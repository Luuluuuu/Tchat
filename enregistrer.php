<?php
    session_start();
    require_once("connexionBD.php");

    if (!isset($_SESSION["pseudo"])){
        $_SESSION["pseudo"] = $_GET["pseudo"];
    }

    $linkpdo = connexion();

    $req = "INSERT INTO chat (HoraireChat, AuteurChat, ContenuChat)
    VALUES (NOW(), ?, ?)";
    $res = $linkpdo->prepare($req);
    $res->execute(array($_SESSION["pseudo"], $_GET["phrase"]));

    deconnexion($linkpdo);
?>