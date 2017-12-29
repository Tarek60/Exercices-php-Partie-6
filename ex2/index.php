<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        $_GET['age'] = (int) $_GET['age'];
        if(isset($_GET['age'])){
            echo $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . $_GET['age'];
        } else {
            echo 'Veuillez renseigner un age !';
        }
            
        
        ?>
    </body>
</html>
