<?php
$page = "Accueil";
/*
    Dernière édition le : 17-01-2021
    Par : Ben
*/

// Accueil

include('ressources/scripts/php/bd_connexion.php');
$caroussel_length = 15;

?>
<!DOCTYPE html>
<html lang="fr">
    <!--En-tête de la page-->
        <?php include('ressources/scripts/php/head.php'); ?>
        <link rel="stylesheet" href="ressources/styles/css/accueil.css">
        <script>window.caroussel_length = <?phpecho $caroussel_length;?></script>
    </head>
    <!--Corps de la page-->
    <body onload="loadpage(); loadPurchase();">
        <!--Header de la page-->
        <?php include('ressources/scripts/php/header.php'); ?>
        <!-- Landing -->
        <div id="landing">
            <div id="caroussel">
                <div id="caroussel-rectangle">
                    <div class="caroussel-start">
                        
                    </div>
                    <?php
                    $random_number_array = range(1, 106);
                    shuffle($random_number_array);
                    for($i = 1; $i < $caroussel_length+1; $i++){
                        $random = $random_number_array[$i];
                        $cd = $bdd->prepare("SELECT * FROM sentiments WHERE id = " . $random);
                        $cd->execute();
                        $cdata = $cd->fetch(PDO::FETCH_OBJ);
                        ?>
                        <div class="caroussel-item" id="item<?phpecho $i;?>">
                            <h1><?php
                                echo $cdata->nom;
                            ?></h1>
                            <img alt="Image illustrative du sentiment <?php echo $cdata->nom; ?>" width="200" height="200" src="<?php echo $cdata->illustration; ?>">
                        </div>
                        <?php
                    }
                    $cd->closeCursor()
                    ?>
                    <div class="caroussel-stop">
    
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Landing -->
        <!-- Informations -->
        <div id="apropos">
            <section id="qui">
                <h2>Qui sommes-nous ?</h2>
                <p>
                    Sentymental est le premier site français qui permet aux particuliers de commander n'importe quel sentiment dans notre catalogue en toute simplicité : que ça soit l'amour, le mépris ou bien encore la joie.
                </p>
                <h3>Notre mission</h3>
                <p>
                    Notre mission est de rendre ce monde meilleur en respectant trois consignes principales : la satisfaction de la clientèle, la rapidité de la livraison et la meilleur qualité possible pour les sentiments que nous mettons à disposition.
                </p>
            </section>
            <section id="quoi">
                <h2>Que vendons-nous ?</h2>
                <p>
                    Les sentiments que nous avons mis en vente sont séparés en 9 catégories.
                </p>
                <h3>Quelles catégories ?</h3>
                <p>
                    Vous pourrez retrouver la peur, la tristesse et bien d'autres encore.
                </p>
                <h3>Quels sentiments pouvez-vous retrouver ?</h3>
                <p>
                    Dans ces catégories, vous allez pouvoir retrouver plus de 100 sentiments uniques que vous allez pouvoir commander et recevoir chez vous, sans délai.
                </p>
            </section>
        </div>
        <div id="contact">
            <div id="carte">
                <iframe id="mobile_carte" width="300" height="300" src="https://www.openstreetmap.org/export/embed.html?bbox=2.3161384463310246%2C48.86004754159256%2C2.320601642131806%2C48.8615527456014&amp;layer=mapnik&amp;marker=48.86079926695512%2C2.318370044231415"></iframe>
                <iframe id="ordi_carte" width="500" height="500" src="https://www.openstreetmap.org/export/embed.html?bbox=2.3161384463310246%2C48.86004754159256%2C2.320601642131806%2C48.8615527456014&amp;layer=mapnik&amp;marker=48.86079926695512%2C2.318370044231415"></iframe>
                <a target="_blank" href="https://www.openstreetmap.org/?mlat=48.86080&amp;mlon=2.31837#map=19/48.86080/2.31837">Voir carte en plus grand</a>
            </div>
            <div id="mobilespacer"></div>
            <div id="info">
                <address>
                    Retrouvez-nous:
                    <br>
                    <br>
                    Sentymental
                    <br>
                    404 Rue du Web
                    <br>
                    75007 Paris, France
                    <br>
                    <br>
                    <i class="fa fa-phone"></i> 19 21 68 00 00
                    <br>
                    <i class="fa fa-envelope"></i> info@sentymental.fr
                </address>
            </div>
        </div>
        <!-- Fin Informations -->
        <?php include('ressources/scripts/php/footer.php'); ?>
    </body>
</html>
