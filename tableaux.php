<?php 
    $mois = array (
        '01' => 'Janvier',
        '02' => 'Fevrier', 
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Decembre',
    );
    $correctionMois = "Août"; 
    $mois['08'] = $correctionMois;
?>
<?php 
    $departement = array (
        '01' => 'Ain',
        '03' => 'Allier',
        '07' => 'Ardèche',
        '15' => 'Cantal',
        '26' => 'Drôme',
        '38' => 'Isère',
        '42' => 'Loire',
        '43' => 'Haute-Loire',
        '63' => 'Puy-de-Dôme',
        '69' => 'Rhône',
        '73' => 'Savoie',
        '74' => 'Haute-Savoie'
    );
    $ajoutMetz = "Mosselle";
    $departement['57'] = $ajoutMetz;
?>

<?php 

    $mailingList = array ("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tableaux</title>
    </head>
    <body>
    <?php 
        include('index.php');
        ?>
        <h1>Les Tableaux</h1>
        // <a href="https://github.com/becodeorg/BXL-Lovelace-3.9/blob/master/parcours/06-PHP/php-ex-arrays.md">Instructions sur Git Hub </a> //

        <h2>Exercice 1</h2> 
        <p>
        <?php echo "Les mois de l'annee sont : " . '<br>' ?>
        <?php   
            foreach ($mois as $moisAnnee) {
                echo " - " . $moisAnnee . "<br>";
            }
        ?>
        </p>
        <!-- ALTERNATIVE in PHP , jointure de chaque element du tableau    join("<br>", $mois);-->
        <!-- ALTERNATIVE in PHP, with each key '<pre>'; print_r($mois); echo '</pre>'; -->  
        

        <h2>Exercice 2</h2>
        <p>
            <?php echo "Le troisieme mois de l'annee est : " . $mois['03'] . "." ?> 
            <br>
            <?php echo "La valeur de l'index 5 est " . $mois['05'] . "." ?>
            <br>
            <?php echo "Correction du mois de Aout : " . $mois['08'] . "." ?>
        </p>

        <h2>Exercice 3</h2>

        <p>
            <?php echo "Le numero de departement 69 a comme nom : " . $departement['01'] . "." ?> 
                <br>
                <?php echo "La ville de Metz fait partie du departement : " .$departement['57'] . "." ?>
                <br><br>
                <?php
                    foreach ($departement as $key => $value) {
                        echo "Le departement " . $value . " a le code : " . $key . "<br>";          
                    }
            ?>
        </p>

        <h2>Exercice 4</h2>
        <?php 
            foreach ($mailingList as $destinataire) {
                echo "Salut $destinataire, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)" . "<br>"; 
            }
        ?>
    <!-- Camille se marie et doit envoyer des mails à ses amis.

    En utilisant ce tableau, faites en sorte que chaque personne de cette liste reçoit le même mail en faisant en sorte qu'il soit personnalisé.

    array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

    Mail : "Salut prénom, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)" 
    -->
        <p>
            
        </p>
        
    </body>
</html>