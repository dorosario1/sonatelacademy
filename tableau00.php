<?php
session_start();
if (isset ($_SESSION['login0'])=='user')
{


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon tableau</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:gray">
<div style="margin-left: 400px;  margin-right:200px; margin-top: 100px; margin-bottom: 200px; ">
    <h3> Malick Do Rosario & Mouhamed Camara </h3>
    <form method="post" action="#">
        Entrer un numéro :
        <select name="choix">
            <option value="">Nombre</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" name="valider" value="Générer" required>
    </form>
    <?php
    if (isset($_POST['valider']) && isset($_POST['choix']))
        extract($_POST);
    {
        if ($choix == "") {
            echo "Veuillez choisir un nombre svp.";
        } else {
            echo "<br/><br/><br/><br/><table border='1' width='500' height='500'>";
            $cR = 0;
            $cB = $choix - 1;
            for ($i = 0; $i < $choix; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $choix; $j++) {
                    if ($j == $cR && $j == $cB) {
                        echo "<td style='background-color: green;'></td>";
                    } elseif ($j == $cB) {
                        echo "<td style='background-color: #0000ff;'></td>";
                    } elseif ($j == $cR) {
                        echo "<td style='background-color: #ff0000;'></td>";
                    } else {
                        echo "<td style='background-color: white;'></td>";
                    }
                }
                $cR++;
                $cB--;
                echo "</tr>";
            }


        }
    }
    }

    else{
        echo "desolé votre profil ne vous permet pas d'acceder a ce contenue";
    }

    ?>
    </div>
    </body>
</html>

