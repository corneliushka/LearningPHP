<?php
    $nom = " Gaina "; 
    $prenom = " Corneliu "; 
    $age = 28;
?>    
<?php 
    $km = 1;
    $km *= 3;
    $km *= 125;
?>
<?php 
    $groupe = "Lovelace";

    $annee = 2019;
    $code = 3.9;
    $enCours = true;
?>

<?php 
    $price = NULL;
    $price;
    $price = 10;
    $price;
?>

<?php 
    $nains = 3 + 4;
    $siecle = 5 * 20;
    $wagon = 45/5; 
?>

<?php
    $tshirtBase = 785;
    $pourcentRistourne = 30/100;
    $tshirtRistourne = $tshirtBase - (785 * 30/100);
    $montantRistourne = $tshirtBase - $tshirtRistourne;
?>

<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
            include('index.php');
        ?>
        <h1> Les Variables </h1>
        // <a href="https://github.com/becodeorg/BXL-Lovelace-3.9/blob/master/parcours/06-PHP/php-ex-variables.md">Instructions sur Git Hub </a> //
        <h2> Exercice 1</h2>
        <p> <?php echo 'Bonjour, vous etes' . $prenom . '' . $nom . ', et vous avez ' . $age . ' ans' ?> </p>
    <br>
        <h2> Exercice 2</h2>
        <p>1km * 3 * 125 est egal a : <?php echo $km ?></p>
    <br>
        <h2> Exercice 3</h2>
        <p>
        <?php 
            if (enCours == true)
                echo 'En ' . $annee . ' j\'ai integre la promotion de' . $groupe . '' . $code 
        ?>
        </p>
    <br>
        <h2> Exercice 4</h2>
        <p>
        <?php
            echo 'Le prix est de :' . $price . ' euros.' 
        ?>
        </p>
    <br>
        <h2> Exercice 5</h2>
        <p> 
            <?php 
            echo 
            'Dans le conte de Blanche-Neige il y a ' . $nains . ' nains.' . "\r" . "\n" .

            'Dans un siecle il y a ' . $siecle . '' . ' annees.' . "\r" . "\n" .

            'La formation LeWagon dure ' . $wagon . ' semaines.'
            ?>
        </p>
        <h2> Exercice 6</h2>
        <p>
            <?php
            echo 
            'Le montant de base du t-shirt est de ' . $tshirtBase . ' euros.' . "\r" . "\n" .

            'Le montant de la ristourne est de ' . $montantRistourne . ' euros.' . "\r" . "\n" .

            'Le montant final du t-shirt est de ' . $tshirtRistourne . ' euros.'
            ?>
        </p> 
    </body>
</html>


