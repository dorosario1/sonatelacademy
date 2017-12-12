<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('location: tp.php');

}


elseif (isset ($_SESSION['login'])) {
    if ($_SESSION['login'] == "admin") {
    }
}

?>
<!DOCTYPE html>

<html lang="fr">

<head>

    <title></title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<a href="tableau00.php">Tableau</a><br>
<a href="exotay.php">Comparer</a>
</body>
<a href="deconnexion.php">deconnexion</a>