<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).keyup(function(event) {
            if (event.which === 13) {
                ajaxEnregistrer();
            }
        });
    </script>
</head>
<body>
    <div id="chat">
        <?php include("recuperer.php"); ?>
    </div>
    <input type="hidden" id="pseudo" value="toto"/>
    <input type="text" id="phrase" placeholder="Ecrivez votre message" required/>
    <input type="button" id="envoyer" value="Envoyer" onClick="ajaxEnregistrer();"/>
</body>
</html>