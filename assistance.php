<?php
$page = "Assistance";
/*
    Dernière édition le : 05-01-2021
    Par : Raf
*/

// Accueil
?>
<!DOCTYPE html>
<html lang="fr">
    <!--En-tête de la page-->
        <?php include('ressources/scripts/php/head.php'); ?>
        <link rel="stylesheet" href="ressources/styles/css/assistance.css">
    </head>
    <!--Corps de la page-->
    <body onload="loadpage(); loadPurchase();">
        <!--Header de la page-->
        <?php include('ressources/scripts/php/header.php'); ?>
        <div class="formulaire">
        <p>404 Rue du Web</p>
        <p>tel : 19 21 68 00 00</p>
        <form>
            <input type="text" name="Email" placeholder="Email">
            <input type="text" name="Nom" placeholder="Nom">
            <input type="text" name="Prénom" placeholder="Prénom">
            <input type="text" name="Objet" placeholder="Objet">
            <textarea name="Message" placeholder="Message"></textarea>
            <button type="submit" disabled>Envoyer</button>
        </form>
    </div>
        <?php include('ressources/scripts/php/footer.php'); ?>
    </body>
</html>
