<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Entraînement PHP : Variables</title>
    </head>
    <body>
        <h1>Entraînement PHP : Variables</h1>
        <!--Exercice n°1-->
        <?php
        	$nom = 'Jacky';
        ?>
        <?php echo $nom; ?>
        <!--Exercice n°2-->
        <?php
	        $nom = 'Fromont';
	        $prenom = 'Lucas';
	        $age = 23;
        ?>
        <!--Méthode 1 (propre)-->
        <p>
        	Nom : <?php echo $nom?><br/>
        	Prénom : <?php echo $prenom?><br/>
    		Âge : <?php echo $age?> ans.
    	</p>
    	<!--Méthode 2 (nul)-->
        <?php echo 'Nom : ' . $nom . ' Prénom : ' . $prenom . ' Âge : ' . $age . ' ans'; ?>
        <!--Exercice n°3-->
        <?php
	        //$km = 1;
	        //$km = 3;
	        $km = 125;
        ?>
        <p>
        	Nombre de kilomètre(s) : <?php echo $km  ?>		
        </p>
        <!--Exercice n°4-->
        <?php
	        //string
	        $texte = "Bonjour";
	        //int
	        $chiffreEntier = 69;
	        //float
	        $chiffreVirgule = 4.20;
	        //bool
	        $boolean = true;
	        //NULL
	        //$rien = NULL;
        ?>
	    <p>
	    	Affichage du "string" : <?php echo $texte ?><br/>
	        Affichage du "int" : <?php echo $chiffreEntier ?><br/>
	    	Affichage du "float" : <?php echo $chiffreVirgule ?><br/>
	    	Affichage du "booléen" : <?php echo $boolean;?>
    	</p>
    	<!--Exercice n°5-->
    	<?php
	    	//Correction de l'exercice 5, déclarer une variable vide
            $chiffreSansValeur = NULL;
	    	$chiffreSansValeur1 = '';
            $chiffreSansValeur2 = 0;
            $chiffreSansValeur3 = FALSE;
            $chiffreSansValeur4 = NULL;
            $chiffreSansValeur5 = 1;

            if(empty($chiffreSansValeur1)){
                echo '$chiffreSansValeur1 est vide' . '<br/>';
            }
            if(empty($chiffreSansValeur2)){
                echo '$chiffreSansValeur2 est vide' . '<br/>';
            }
            if(empty($chiffreSansValeur3)){
                echo '$chiffreSansValeur3 est vide' . '<br/>';
            }
            if(empty($chiffreSansValeur4)){
                echo '$chiffreSansValeur4 est vide' . '<br/>';
            }
            if(empty($chiffreSansValeur5)){
                echo '$chiffreSansValeur5 est vide' . '<br/>';
            } else {
                echo '$chiffreSansValeur5 n\'est pas vide, il est égal à :' . $chiffreSansValeur5 . '<br/>';
            }

    	?>
    	<p>
    		Appel du chiffre vide : <?php echo $chiffreSansValeur;?>
    			
    	</p>
    	<!--Exercice n°6-->
    	<?php
    		$nomClassique = 'Roger';
    	?>
    	<p>
    		Salut <?php echo $nomClassique ?>, comment vas-tu ?
    	</p>
    	<!--Exercice n°7-->
    	<?php
	    	$nom2 = 'Drucker';
	    	$prenom2 = 'Michel';
	    	$age2 = 844;
    	?>
    	<p>
    		Bonjour <?php echo $nom2?> <?php echo $prenom2 ?>, tu as <?php echo $age2 ?> ans.
    	</p>
    	<!--Exercice n°8-->
    	<?php
    		$addition = 3 + 4;
    		$multiplication = 4 * 25;
    		$division = 10 / 2;
    	?>
    	<p>
    		Résultat de l'addition pour 3 + 4 = <?php echo $addition?><br/>
    		Résultat de la multiplication pour 4 x 25 = <?php echo $multiplication?><br/>
    		Résultat de la division pour 10 / 2 = <?php echo $division?>
    	</p>
    </body>
</html>