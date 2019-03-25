<?php   
    $IsEasy = true;
?>

<?php 
    $age = 25;
    $genre = "Feminin";
?>

<?php
    $magnitude= 0;
?>

<?php 
    $maVariable = "Homme";
?> 

<?php 
    $monAge = 28;
?>

<?php 
    $myVar = true;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Les Conditions</title>
    </head>
    <body>
        <?php 
            include('index.php');
        ?>
        <h1>Les Conditions</h1>
        // <a href="https://github.com/becodeorg/BXL-Lovelace-3.9/blob/master/parcours/06-PHP/php-ex-conditions.md">Instructions sur Git Hub </a> //
        <h2>Exercice 1</h2>
        <p>
            Votre age est de <?php echo $age ?>.
            <?php if ($age >= 18): ?>
            Vous etes majeur.
            <?php else: ?>
            Vous etes mineur.
            <?php endif; ?>
        </p>

        <br>

        <h2>Exercice 2</h2>
        <p>
            <?php if ($IsEasy == true): ?>
            PHP C'est Facile ! 
            <?php else: ?>
            PHP C'est Difficile !
            <?php endif; ?>
        </p>

        <h2>Exercice 3</h2>
        <p>
            <?php   
                if (($genre == "Masculin") AND ($age < 18)):
                    echo "Vous etes un homme mineur.";
                elseif (($genre == "Masculin") AND  ($age >= 18)): 
                    echo "Vous etes un homme majeur.";
                elseif (($genre == "Feminin") AND ($age < 18)):
                    echo "Vous etes une femme mineure.";
                elseif (($genre == "Feminin") AND ($age >= 18)):
                    echo "Vous etes une femme majeure."; 
                endif
            ?>
        </p>
        <br>


        <h2>Exercice 4</h2>
        <p>
            <?php 
                switch ($magnitude) {
                    case 0:
                        echo "Aucun seisme a l'horizon, vous pouvez gambader tranquile !";
                        break;
                    case 1:
                        echo "Micro-séisme impossible à ressentir.";
                        break;
                    case 2:
                        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";                       
                        break;
                    case 3:
                        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                        break;
                    case 4:
                        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                        break;
                    case 5:
                        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                        break;
                    case 6:
                        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                        break;
                    case 7:
                        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                        break;
                    case 8:
                        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                        break;
                    case 9:
                        echo "Séisme capable de tout détruire sur une très vaste zone.";
                        break;
                }
            ?>
        </p>
        <br>

        <h2>Exercice 5</h2>
        <p>
            <?php
                if ($maVariable != 'Homme') :
                    echo "C\'est une développeuse !";
                elseif ($maVariable):
                    echo "C\'est un développeur !'";
                endif
            ?>
        </p>

        <br>

        <h2>Exercice 6</h2>
        <?php
            if ($monAge >= 18): 
                echo 'Tu es majeur.';
            elseif ($monAge < 18):
                echo 'Tu n\'es pas majeur.';
            endif
        ?>
        </p>

        <br>

        <h2>Exercice 7</h2>
        <p>
        <?php
            if ($myVar == false):
                echo "C\'est pas bon";
            else: 
                echo "C\'est ok !";
            endif
            
        ?>
        </p>

        <br>

        <h2>Exercice 8</h2>
        <p>
<!--         <?php
            if ($maVariable):
                echo "C\'est ok !"; 
            else: 
                echo "C\'est pas bon !";
            endif
        ?> -->
        </p>

        

    </body>
</html>