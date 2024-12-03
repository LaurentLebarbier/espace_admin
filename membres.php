<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;charset=utf8;', 'laurent', 'h9xt2ya1');
if (!$_SESSION['mdp']) {
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les membres</title>
    <link rel="stylesheet" href="style/style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Afficher tout les membres -->
    <?php
        $recupUsers = $bdd->query('SELECT * FROM membres');
        while($user = $recupUsers->fetch()){
            echo $user['pseudo'];
        }
    ?>
    <!-- Fin d'afficher tout les membres -->
</body>

</html>