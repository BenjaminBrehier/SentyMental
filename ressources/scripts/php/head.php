<?php
/*
    Dernière édition le : 18-12-2020
    Par : Rafael
*/

// Head de toutes les pages du site
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Sentymental">
    <meta name="description" content="Sentymental est le premier site français qui permet les particuliers de commander n'importe quel sentiment dans notre catalogue en toute simplicité.">
    <meta name="keywords" content="sentiments, sentymental, acheter">
    <meta name="robots" content="
    <?php 
        if($page=="Panier"){
            echo "no";
        } else {
            echo "";
        }
    ?>
    index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="Benjamin BREHIER-CARDOSO, Clement GERAUDIE, Rafael BITCA">
    <title><?php echo $page; ?> | Sentymental</title>
    <link rel="stylesheet" href="ressources/styles/css/reset.css">
    <link rel="stylesheet" href="ressources/styles/css/all.css">
    <link rel="stylesheet" href="ressources/styles/fa/css/all.min.css">
    <script src="ressources/scripts/js/index.js"></script>
    <script src="ressources/scripts/js/panier.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>