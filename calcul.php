<?php
session_start();
if (isset ($_SESSION['login'])) {
    if ($_SESSION['login']=="user"){
?>

    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        //$nombre1 = $_POST['un'];
        //$nombre2 = $_POST['deux'];

        if ($operation == '+') {
            echo "$un $operation $deux = " . ($un + $deux);

        } elseif ($operation == '-') {
            echo "$un $operation $deux = " . ($un - $deux);
        } elseif ($operation == '/') {
            if ($submit == 0) {
                echo 'impossible';
            }

            echo "$un $operation $deux = " . ($un / $deux);
        } elseif ($operation == '*') {
            echo "$un $operation $deux = " . ($un * $deux);
        } elseif ($operation == '%') {
            if ($operation == 0) {
                echo 'impossible';
            }

            echo "$un $operation $deux = " . ($un % $deux);
        }

}
        ?>

        <!DOCTYPE html>
        <meta charset="utf-8">
        <html>
        <form method="post" action="">
            <fieldset class="table">
                <input type="number" "premiernombre" name="un"><br><br/>
                <input type="number" "deuxiemenombre" name="deux"><br><br/>
                <select name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                    <option value="%">%</option>

                </select>
                <br><br/> <input type="submit" name="submit" value="calculer ">
        </form>

        </html>
    
        <?php
} else {
        echo "desolé votre profil ne vous permet pas d'acceder a ce contenue";
    }
}
?>