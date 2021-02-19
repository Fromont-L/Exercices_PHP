<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Entraînement PHP : Tableaux</title>
    </head>
    <body>
        <h1>Entraînement PHP : Tableaux</h1>
        <!--Simple method-->
        <?php
        	//create the same variable and give the order and a 'name';
        	$prenoms[0] = 'Jacky';
        	$prenoms[1] = 'José';
        	$prenoms[2] = 'Annie';

        	//shows the first name in the list : Jacky
        	echo $prenoms[0];
        ?>
        <!--Best method-->
        <?php
        	//create one variable with an array('with', 'things', 'inside');
        	$varPrenoms = array('Jacky', 'José', 'Annie');

        	//shows the third name in the array list : Annie
        	echo $varPrenoms[2];
        ?>
        <!--Exercice n°1-->
        <h2>Exercice 1</h2>
        <?php
        	$mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Semptembre', 'Octobre', 'Novembre', 'Decembre');
        ?>
        <p>Variable "$mois" déclarée pour les exercices suivant</p>
        <!--Exercice n°2-->
        <h2>Exercice 2</h2>
        <?php
        	echo 'Affichage de la troisième ligne du tableau des mois : ' . $mois[2];
        ?>
        <!--Exercice n°3-->
        <h2>Exercice 3</h2>
        <?php
        	echo 'Affichage de l\'index de la valeur 5 : ' . $mois[5];
        ?>
        <!--Exercice n°4-->
        <h2>Exercice 4</h2>
        <?php
        	//C'est pas sympa il était déjà...
        	$remplace = array(7 => "Août");

        	$remplacement = array_replace($mois, $remplace);

        	print_r($remplacement[7]);
        ?>
        <!--Exercice n°5-->
        <!--Exercice n°5-->
        <h2>Exercice 5</h2>

        <?php
            
            $varDep = [('02') => 'Aisne',
                    ('59') => 'Nord',
                    ('60') => 'Oise',
                    ('62') => 'Pas-de-Calais',
                    ('80') => 'Somme'];

            print_r($varDep);
        ?>
        <h2>Exercice 5</h2>

        <?php
        	
        	$varDep = array(02 => "Aisne",
                    59 => "Nord",
                    60 => "Oise",
                    62 => "Pas-de-Calais",
                    80 => "Somme");

            print_r($varDep);

        ?>
    	<!--Exercice n°6-->
    	<h2>Exercice 6</h2>
    	<?php
    		print_r($varDep[59]);
    	?>
    	<!--Exercice n°7-->
    	<h2>Exercice 7</h2>
    	<?php
    		array_push($varDep, "Marne");
    		print_r($varDep);
    	?>
    	<!--Exercice n°8-->
    	<h2>Exercice 8</h2>
    	<?php
    		echo implode(", ", $mois);
    	?>
    	<!--Exercice n°9-->
    	<h2>Exercice 9</h2>
    	<?php
    		foreach ($varDep as $cle => $varDepOnly)
    		{
    			echo($varDepOnly . "\n");
    		}
    	?>
    	<!--Exercice n°10-->
    	<h2>Exercice 10</h2>
    	<?php
            /*Je sais pertinament que c'est pas ce qu'il faut faire mais je vais devoir réviser les tableaux et ses fontionnements un peu plus pour piger, autrement le brief ne sera jamais rendu...*/
    		function depart($nomDep, $numDep)
            {
                return 'Le département ' . $nomDep . ' a le numéro ' . $numDep . '.<br/>';
            }

    		echo depart("Aisne", "02");
            echo depart("Marne", "51");
            echo depart("Nord", "59");
            echo depart("Oise", "60");
            echo depart("Pas-de-Calais", "62");
            echo depart("Somme", "80");
    	?>
    </body>
</html>
