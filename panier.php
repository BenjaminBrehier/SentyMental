<?php
$page = "Panier";
/*
    Dernière édition le : 08-01-2021
    Par : Ben
*/

// Accueil
?>
<!DOCTYPE html>
<html lang="fr">
    <?php include('ressources/scripts/php/head.php'); ?>
	<link rel="stylesheet" href="ressources/styles/css/panier.css">
    <noscript>
        <style>
            #panier-cmd{
                display: none;
            }
            #js-warning{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }
            #js-warning > h1{
                font-size: 5vw;
            }
            @media screen and (max-width: 950px){
                #js-warning > h1{
                    font-size: 10vw;
                }
            }
        </style>
    </noscript>
</head>
<body onload="loadpage(); loadPanier();">
    <?php include('ressources/scripts/php/header.php'); ?>
	<h1>Votre Panier</h1>
    <div id="js-warning">
            <h1>Cette page ne marche pas sans Javascript. Veuillez réessayer en activant Javascript.</h1>
    </div>
	<div id="panier-cmd">
		<div id="articles">
		</div>
		

		<div id="paiement">
			<div id="prix">
				<p>Produits : </p>
				<hr>
				<h2>Total : </h2>
				<button>Commander</button>
			</div>
			<div id="info-livraison">
				<div class="block">
					<i class="fas fa-clock"> Livraison instantané</i>
				</div>
				<div class="block">
					<i class="fas fa-truck-loading"> Livraison gratuite</i>
				</div>
				<div class="block">
					<i class="fas fa-lock"> Paiement sécurisé</i>
				</div>
			</div>
			<div id="contact">
				<p>Une question ? N'hésitez pas à nous <a href="assistance.php">contacter</a></p>
				<p>tél : 19 21 68 00 00</p>
			</div>
			
		</div>
	</div>
	<?php include('ressources/scripts/php/footer.php'); ?>
</body>
</html>