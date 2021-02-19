<?php
/*
    Dernière édition le : 05/01/2021
    Par : Clément
*/

// Header du site
?>

<header>
    <div id="logo">
        <a href="https://exe2glace.ddns.net/sites/SentyMental/index.php"><span style="color:#F08080;">SENTY</span><span style="color:#FFFFFF;">MENTAL</span></a>
    </div>
    <div class="menuicon">
        <i class="fas fa-bars"></i>
    </div>
    <nav>
        <ul>
            <li><a id="accueil" href="#">Accueil</a>
            <div class="dd-a">
                <a href="#">Page principale</a>
                <a href="#apropos">À propos de nous</a>
                <a href="#contact">Informations générales</a>
            </div></li>
            <li><a id="produits" href="#">Produits</a>
            <div class="dd-p">
                <a id="categories" href="articles.php?filtre=categories">Catégories</a>
                <a id="promotion" href="articles.php?filtre=promotion">Promotion</a>
            </div></li>
            <li><a id="assistance" href="assistance.php">Assistance</a></li>
            <li><a id="panier" href="panier.php">Mon Panier <i class="fas fa-shopping-basket"></i></a></li>
        </ul>
    </nav>
</header>
<div class="whitespace"></div>
<menu>
    <li><a id="accueil_m" href="#">Accueil</a></li>
    <li class="tiny"><a id="landing_m" href="/#">Page principale</a></li>
    <li class="tiny"><a id="apropos_m" href="/#apropos">À propos de nous</a></li>
    <li class="tiny"><a id="contact_m" href="/#contact">Informations générales</a></li>
    <li><a id="produits_m" href="#">Produits</a></li>
    <li class="tiny"><a id="categories_m" href="articles.php?filtre=categories">Catégories</a></li>
    <li class="tiny"><a id="promotion_m" href="articles.php?filtre=promotion">Promotion</a></li>
    <li><a id="assistance_m" href="assistance.php">Assistance</a></li>
    <li><a id="panier_m" href="panier.php">Mon Panier</a></li>
</menu>