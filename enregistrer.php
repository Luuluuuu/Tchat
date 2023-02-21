<?php
    require_once("connexionBD.php");
    header("Location: afficher.php");
    if (isset($_GET["envoyer"])){
        $linkpdo = connexion();

        $req = "INSERT INTO chat (HoraireChat, AuteurChat, ContenuChat)
        VALUES (NOW(), ?, ?)";
        $res = $linkpdo->prepare($req);
        $res->execute(array($_GET["pseudo"], $_GET["phrase"]));

        deconnexion($linkpdo);
    }
?>