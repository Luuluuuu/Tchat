<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="corp">
    <div id="chat">
        <?php include("recuperer.php"); ?>
    </div>
    <div id="barreEnvoi">
        <!-- Saisie du message -->
        <?php
            session_start();
            if (!empty($_SESSION["pseudo"])){
                echo '<input hidden id="pseudo" value="' . $_SESSION["pseudo"] . '" required/>';
            } else {
                echo '<input type="text" id="pseudo" placeholder="Ecrivez votre pseudo" required/>';
            }
        ?> </br>
        <input type="text" id="phrase" placeholder="Ecrivez votre message" required/>
        <button id="envoyer">Envoyer</button>
        <p id="erreur"></p>
    </div>

    <!-- SCRIPT -->
    <script src="script.js"></script>
</body>
</html>