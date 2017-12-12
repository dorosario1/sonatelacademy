<?php
if (isset ($_SESSION['login'])=='admin') {
echo "Sonatel Academy <br />";
$date = date("d-m-y");
$heure = date("h-i");
Print("nous sommes le $date : il est $heure ");

}
else {
    echo "desolé votre profil ne vous permet pas d'acceder a ce contenue";
}

    ?>