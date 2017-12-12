<?php
session_start();
if (isset ($_SESSION['login'])) {
    if ($_SESSION['login']=="user"){

echo "Sonatel Academy <br />";
$date = date("d-m-y");
$heure = date("h-i");
Print("nous sommes le $date : il est $heure ");

}
else {
    echo "desolé votre profil ne vous permet pas d'acceder a ce contenue";
}
}
    ?>