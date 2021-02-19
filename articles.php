<?php
$page = "Articles";
include('ressources/scripts/php/bd_connexion.php');
/*
    Dernière édition le : 05-01-2021
    Par : Raf
*/
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <!--En-tête de la page-->
    <?php include('ressources/scripts/php/head.php'); ?>
    <link rel="stylesheet" href="ressources/styles/css/articles.css">
</head>
<!--Corps de la page-->
<?php
$panier = array();
function stock($nom) {
    $panier[sizeof($panier)] = $nom;
}
?>
<body onload="loadpage(); loadPurchase();">
    <!--Header de la page-->
    <?php include('ressources/scripts/php/header.php');
    $catSpecifie = false;
    $isNum = false;
    $enablewhile = true; // cette variable sert à ne pas mettre la boucle while en marche si les paramètres sont faux
    if(array_key_exists("filtre", $_GET)){
        if($_GET['filtre']=="categories"){
            $catSpecifie = array_key_exists("categorie",$_GET);
            if($catSpecifie){
                $isNum = is_numeric($_GET['categorie']);
            }
            if($isNum){
                $sql = "SELECT * FROM sentiments";
                $sql.= " WHERE categories LIKE '%";
                $sql.= $_GET['categorie'];
                $sql.= "%'";
                $articles = $bdd->prepare($sql);
                $articles->execute();
            } elseif(!$catSpecifie) {
                ?><h1 class="consigne" style="text-align: center;">Cliquez sur une catégorie pour voir les sentiments disponibles.</h1><?php
                $articles = $bdd->prepare('SELECT * FROM categories');
                $articles->execute();
            }
        } elseif($_GET['filtre']=="populaire") {
            $enablewhile = false; // Clément : enlève ça avant de travailler sur le SQL de la page populaire
        } elseif($_GET['filtre']=="promotion") {
            $articles = $bdd->prepare('SELECT * FROM sentiments WHERE nouveauprix IS NOT NULL');
            $articles->execute();
        } else {
            $enablewhile = false;
            //page d'erreur
        }
        $count = 0;
        if($enablewhile){
            ?>
            <div id="articles">
                <?php
                while($datasenty = $articles->fetch(PDO::FETCH_OBJ)):
                    ?>

                    <div class="bloc_article">
                        <?php
                        if ($_GET['filtre'] == "categories" and !$catSpecifie){
                            ?>
                            <a class="categoryname" href="articles.php?filtre=categories&categorie=<?phpecho $datasenty->id?>"><h1><?php echo $datasenty->nom; ?></h1></a>
                            <?php
                        } else {
                            ?>
                            <h1><?php echo $datasenty->nom; ?></h1>
                            <?php}
                            if ($_GET['filtre'] != "categories" OR $isNum){
                                ?>
                                <p><?php echo $datasenty->description; ?></p>
                                <!-- NOTE: REMPLACER BR PAR PROPRIÈTÈ CSS -->
                                <br>
                                <br>
                                <div>
                                    <?php 
                                    if(!empty($datasenty->nouveauprix)){
                                        ?>
                                        <span class="vieux_prix"><del><?php echo $datasenty->prix; ?>€</del></span><span class="nouveau_prix"><?php echo $datasenty->nouveauprix; ?>€</span>
                                        <?php
                                    } else {
                                        ?>
                                        <span class="prix"><?php echo $datasenty->prix; ?>€</span>
                                        <?php 
                                    }
                                    ?>
                                    <a class="button" href="#popup<?phpecho $count;?>">Plus d'infos</a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        
                        <?phpif (!($_GET['filtre'] == "categories" and !$catSpecifie)){?>
                        <div id="popup<?phpecho $count;?>" class="overlay">
                            <div class="popup">
                                <a class="close" href="#">&times;</a>
                                <div class="content">
                                   <?php echo ""; 
                                    if(!empty($datasenty->nouveauprix)){
                                        $price = $datasenty->nouveauprix;
                                    } else {
                                        $price = $datasenty->prix;
                                    }
                                    
                                    $name = $datasenty->nom;

                                    $id = $datasenty->id;


                                    ?>
                                    <img alt="Image illustrative du sentiment <?php echo $datasenty->nom; ?>" width="200" height="200" src="<?php echo $datasenty->illustration; ?>">
                                    <p>Vous cherchez un peu du sentiment <?phpecho $name;?> ? Vous êtes au bon endroit !</p>
                                    <button onclick="setProductInCookies('<?phpecho $name;?>','<?phpecho $price;?>','<?phpecho $id;?>')">
                                        Ajouter produit au panier
                                    </button>
                                    <?php
                                   /*<button onclick="setProductInCookies('

                                    echo $datasenty->nom;
                                    echo '','';
                                    if(!empty($datasenty->nouveauprix)){
                                        echo $datasenty->nouveauprix;
                                    } else {
                                        echo $datasenty->prix;
                                    }
                                    echo '','';
                                    echo $datasenty->id;

                                    */?>
                                </div>
                            </div>
                        </div>
                        <?php}
                        $count++;
                    endwhile;
                    $articles->closeCursor();
                    ?>
                </div>
                <?php
                /*if($_GET['filtre']=="categories" or $_GET['filtre']=="populaire" or $_GET['filtre']=="promotion"){
                    ?>
                    <script>
                        document.getElementById("<?phpecho $_GET['filtre'];?>").className = 'actif';
                        document.getElementById("<?phpecho $_GET['filtre'];?>_m").className = 'actif';
                    </script>
                    <?php
                }*/
                ?>
                <div id="buttons">
                    <?php
                    if($isNum){
                        $num = $_GET['categorie'];
                        if ($num > 1) {?>
                            <button onclick="location.href='http://sentymental.fr/articles.php?filtre=categories&categorie=<?phpecho $num-1?>';">Page précédente</button> <?php
                        }
                        if ($num < 9) {?>
                            <button onclick="location.href='http://sentymental.fr/articles.php?filtre=categories&categorie=<?phpecho $num+1?>';">Page suivante</button> <?php
                        }
                    }
                }
                ?>
            </div>
            <?php
        } else {
        //page d'erreur
        }
        ?>
        <?php include('ressources/scripts/php/footer.php'); ?>
    </body>
    </html>