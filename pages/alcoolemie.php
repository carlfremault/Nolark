<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2020
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->
<html lang="fr-FR">
    <head>
        <title>Casques Nolark&nbsp;:&nbsp;Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/cookies/tarteaucitron/tarteaucitron.js"></script>
        <script src="../js/cookies/tarteaucitron.init.js"></script>
        <script src="../js/alcoolemie.js"></script>
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <link href="../css/alcoolemie.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <?php include('../includes/header.html.inc.php'); ?>
        <section>
            <h1>Simulateur pédagogique d'alcoolémie théorique</h1>
            <form name="form_simulateur">
                <p><label>Poids : </label><input class = "textInput" type="number" id="num_poids" value="100"></p>
                <fieldset id="sexe">
                    <legend>Sexe: </legend>
                    <p><input type="radio" name="rd_sexe" id="rd_sexehomme" value="homme" checked="checked"><label> Homme</label></p>
                    <p><input type="radio" name="rd_sexe" id="rd_sexefemme" value="femme"><label> Femme</label></p>
                </fieldset>
                <p><label>Nombres de Verres : </label><input class = "textInput" type="number" id="num_verres" value="1"></p>
                <h3 id="alcoolemie"></h3>
                <h3 id="amende"></h3>
                <h3 id="sanction"></h3>

                <p id="controles"><input type="button" name="sub_calculer" id="btn_calculer" value="Calculer votre rémunération" /> <input type="reset" name="rst_annuler" id="btn_annuler" value="Effacer les données" /></p>
            </form>
            <?php include('../includes/footer.inc.php'); ?>
    </body>
</html>