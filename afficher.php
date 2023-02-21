<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <input type="hidden" id="pseudo" value="toto"/>
    <input type="text" id="phrase" placeholder="Ecrivez votre message" required/>
    <input type="button" name="envoyer" value="Envoyer" onClick="ajaxEnregistrer();"/>
</body>
</html>