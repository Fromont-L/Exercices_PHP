<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Entraînement PHP : Fonctions</title>
    </head>
    <body>
        <h1>Entraînement PHP : Fonctions</h1>
        <!--Exercice n°1-->
        <h2>Exercice 1</h2>
        <?php
        	function vrai()
        	{
        		return true;
        	}
        	echo vrai();
        ?>
        <br/>
        <!--Exercice n°2-->
        <h2>Exercice 2</h2>
        <?php
        	function memeChaine($texte)
        	{
        		return $texte;
        	}
        	echo memeChaine("Holé holà");
        ?>
        <br/>
        <!--Exercice n°3-->
        <h2>Exercice n°3</h2>
        <?php
        	function concatener($texte1, $texte2)
        	{
        		return $texte1 . ' ' . $texte2;
        	}
        	echo concatener("Bonjour", "tout le monde");
        ?>
        <br/>
        <!--Exercice n°4-->
        <h2>Exercice 4</h2>
        <?php
        	function diff($chiffre1, $chiffre2)
        	{
        		if ($chiffre1 < $chiffre2)
        		{
        			return $chiffre1 . ' est plus petit que ' . $chiffre2;
        		}
        		elseif ($chiffre1 > $chiffre2)
        		{
        			return $chiffre1 . ' est plus grand que ' . $chiffre2;
        		}
        		else 
        		{
        			return $chiffre1 . ' est égal à ' . $chiffre2;
        		}
        	}
        	echo diff(1, 2) . "<br/>";
        	echo diff(3, 2) . "<br/>";
        	echo diff(1, 1) . "<br/>";
        ?>
        <!--Exercice n°5-->
        <h2>Exercice 5</h2>
        <?php
        	function concatener2($nombre, $mots)
        	{
        		return $nombre . ' ' . $mots;
        	}
        	echo concatener2("42", "est un nombre");
        ?>
        <br/>
        <!--Exercice n°6-->
        <h2>Exercice 6</h2>
        <?php
        	function info($nom, $prenom, $age)
        	{
        		return 'Bonjour' . ' ' . $nom . ' ' . $prenom . ', tu as ' .  $age . ' ans.';
        	}
        	echo info("Michel", "Drucker", "844");
        ?>
        <br/>
        <!--Exercice n°7-->
        <h2>Exercice 7</h2>
        <?php
        	function age($age2)
        	{
        		if ($age2 >= 18)
        		{
        			return 'et vous êtes majeur';
        		}
        		else
        		{
        			return 'et vous êtes mineur';
        		}
        	}
        	function genre($genre)
        	{
        		if ($genre == 1)
        		{
        			return 'Vous êtes un homme ';
        		}
        		elseif ($genre == 0)
        		{
        			return 'Vous êtes une femme ';
        		}
        	}
        	echo genre(1), age(844) . "<br/>";
        	echo genre(1), age(14) . "<br/>";
        	echo genre(0), age(24) . "<br/>";
        	echo genre(0), age(17) . "<br/>";
        ?>
        <!--Exercice n°8-->
        <h2>Exercice 8</h2>
        <?php
        	function mathematiques($a, $b, $c)
        	{
        		return ($a + $b + $c);
        	}
        	echo mathematiques(762, 35, 179);
        ?>
    </body>
</html>