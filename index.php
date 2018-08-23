<?php
$result = null;
if (!empty($_GET)) {
    if (isset($_GET['chiffre1']) && isset($_GET['chiffre2'])) {
        $chiffre1 = $_GET['chiffre1'];
        $chiffre2 = $_GET['chiffre2'];
        if (is_numeric($chiffre1) && is_numeric($chiffre2)) {
            if (isset($_GET['addition'])) {
                $result = $chiffre1 + $chiffre2;
            } elseif (isset($_GET['soustraction'])) {
                $result = $chiffre1 - $chiffre2;
            } elseif (isset($_GET['multiplication'])) {
                $result = $chiffre1 * $chiffre2;
            } elseif (isset($_GET['division'])) {
                if ($chiffre2 == 0) {
                    $result = null;
                } else {
                    $result = $chiffre1 / $chiffre2;
                }
            } elseif (isset($_GET['reset'])) {
                $result = null;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="index.php" method="GET">
            <input type="text" name="chiffre1" value="0"/>
            <input type="text" name="chiffre2" value="0"/>
            <input type="submit" name="addition" value="+"/>
            <input type="submit" name="soustraction" value="-"/>
            <input type="submit" name="multiplication" value="*"/>
            <input type="submit" name="division" value="/"/>
            <input type="submit" name="reset" value="Reset"/>
        </form>
        <p>Résultat : <?php echo $result; ?> </p>
    </body>
</html>