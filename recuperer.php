<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('connexionBD.php');

        $linkpdo = connexion();
        $req = 'SELECT M.* FROM (SELECT * FROM chat ORDER BY HoraireChat DESC LIMIT 10) M ORDER BY M.HoraireChat ASC LIMIT 10';
        $res = $linkpdo->prepare($req);
        $res->execute();

        if ($res !== false) {
            foreach ($res as $row) {
                echo $row["AuteurChat"] . " : " . $row["ContenuChat"] . " (" . $row["HoraireChat"] . ')<br/>';
            }
        }
        deconnexion($linkpdo);
    ?>
</body>
</html>