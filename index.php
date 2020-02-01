<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Patter Strategie</title>
</head>

<body>
    <?php 
        
        require_once './vendor/autoload.php';
        
        use Acme\MiniSimulateur;
        
        $resultat = new MiniSimulateur();
        $result = $resultat->main();
        echo($result);
    ?>
</body>

</html>