<?php
/*
    Dernière édition le : 25/11/2020
    Par : Clément
*/

// Footer du site
?>
<?php
if($page == "Accueil"){
?>
    <script>
        window.currentitem = 2;
        window.autoScrollInterval = setInterval(() => {
            autoScroll();
        }, 4000);
    </script>
<?php
}
?>
<footer>
    <div id="footerlogo">
        <span style="color:#F08080;">SENTY</span><span style="color:#FFFFFF;">MENTAL</span>
    </div>
    <div id="footertexte">
        <p>
            Sentymental est un projet créé par Benjamin BREHIER--CARDOSO, Clément GERAUDIE et Rafael BITCA dans le cadre du module CODIN
            à l'IUT d'Orsay. <a target="_blank" href="presentation.pdf">Cliquez ici</a> pour retrouver notre présentation à propos de la création
            du projet et <a target="_blank" href="rapport.pdf">cliquez ici</a> pour retrouver notre rapport.
        </p>
    </div>
</footer>