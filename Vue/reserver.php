<?php require_once "../Manager/managetfilm.php"?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Reserver</title>
</head>
<body>

<h1 <?php
$man = new manager();
$titre = $man->titreFilm();


echo $titre['nom_film'];
?>



</body>
</html>