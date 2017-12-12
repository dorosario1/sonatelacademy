
<!DOCTYPE html>
<html>
<head>
    <title>Tableau de deux tableaux</title>
</head>
<body>

<?php

$Tableau = array('noms' => array("Gueye", "Gadiaga", "Niang", 'fall', 'diop'), 'ages' => array('10', '11', '12', '13', '15'));


function longueurMax($tab)
{
    $max = "";
    $nom = $tab['noms'];
    foreach ($nom as $value) {
        if (strlen($value) > strlen($max)) {
            $max = $value;
        }
    }
    return strlen($max);
}

$a = longueurMax($Tableau);
echo "La longueur maximale des noms est $a <br>";

function moyenne($tab)
{
    $somme = 0;
    $note = $tab['ages'];
    foreach ($note as $value) {
        $somme += $value;
    }
    return $somme / count($tab['ages']);
}

$b = moyenne($Tableau);
echo "La moyenne des ages est $b <br>";


?>

</body>
</html>
