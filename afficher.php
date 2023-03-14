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
    <input type="hidden" id="pseudo" value="toto"/>
    <div id="barreEnvoi">
        <input type="text" id="phrase" placeholder="Ecrivez votre message" required/>
        <button id="envoyer">Envoyer</button>
    </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>