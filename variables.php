<?php
    $nom = " Gaina "; 
    $prenom = " Corneliu "; 
    $age = 28; 
    $msg = "Bonjour, vous etes $prenom , de la famille $nom, et vous avez $age ans."
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
    $message = "En $annee, j'ai integre la promotion de $groupe $code"
?>

<?php 
    $price = NULL;
    /* echo */ $price;
    $price = 10;
    /* echo */ $price;
?>

<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <h2> Exercice 1</h2>
        <p><?php echo $msg ?></p>
        <br>
        <h2> Exercice 2</h2>
        <p>1km * 3 * 125 est egal a : <?php echo $km ?></p>
        <br>
        <h2> Exercice 3</h2>
        <p><?php 
            if (enCours == true)
                echo $message  ?>
        </p>
        <br>
        <h2> Exercice 4</h2>
        <p>Le prix est de :  <?php
            echo $price
            ?> euros.
        </p>
    </body>
</html>


