<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Entraînement PHP : Boucles</title>
    </head>
    <body>
        <h1>Entraînement PHP : Boucles</h1>
        <!--Exercice n°1-->
        <h2>Exercice 1</h2>
        <?php
            //Boucle While
            $boucle = 0;

            while ($boucle <= 10)
            {
                echo strval($boucle) . ' ';
                $boucle++;
            }
        ?>
        <br/>
        <?php
            //Boucle For
            for ($boucle2 = 0; $boucle2 <= 10; $boucle2++)
            {
                echo strval($boucle2) . ' ';
            }
        ?>
        <br/>
        <!--Exercice n°2-->
        <h2>Exercice 2</h2>
        <?php
            //Boucle While
            $varBoucleSimple = 0;
            $varBoucleMulti = rand(1, 100);

            do 
            {
                echo strval($varBoucleSimple * $varBoucleMulti) . ' ';
                $varBoucleSimple++;
            }

            while ($varBoucleSimple <= 20)
        ?>
        <br/>
        <!--ABANDON ERREUR
        <?php              ?>
            //Boucle For
            for ($varBoucleSimple2 = 0;
                $varBoucleMulti2 = rand(1, 100);
                $varBoucleSimple2 <= 20;
                $varBoucleSimple2 * $varBoucleMulti2;
                $varBoucleSimple2++)
            {
                echo strval($varBoucleSimple2) . ' ';
            }
        ?>
        -->
        <!--Exercice n°3-->
        <h2>Exercice 3</h2>
        <?php
            //Boucle While aléatoire
            $varBoucleSimpleInf = 100;
            $varBoucleMultiInf = rand(1, 100);

            while ($varBoucleSimpleInf >= 10)
            {
                echo strval($varBoucleSimpleInf - $varBoucleMultiInf) . ' ';
                // Erreur corrigée, j'avais oublié d'incrémenter à ma deuxième variable $varBoucleMultiInf, et en plus d'être aléatoire ça fonctionne !
                $varBoucleSimpleInf-=$varBoucleMultiInf;
            }
        ?>
        <br/>
        <!--Exercice n°4-->
        <h2>Exercice 4</h2>
        <?php
            $varSolo = 1;

            while ($varSolo < 10)
            {
                echo strval($varSolo) . ' ';
                $varSolo = $varSolo + $varSolo / 2;
            }
        ?>
        <br/>
        <!--Exercice n°5-->
        <h2>Exercice 5</h2>
        <?php
            for($varPresque = 1; $varPresque <= 15; $varPresque++)
            {
                echo "On y est presque... <br/> ";
            }
        ?>
        <br/>
        <!--Exercice n°6-->
        <h2>Exercice 6</h2>
        <?php
            for($varPBon = 20; $varPBon >= 0; $varPBon--)
            {
                echo "C'est presque bon... <br/>";
            }
        ?>
        <br/>
        <!--Exercice n°7-->
        <h2>Exercice 7</h2>
        <?php
            for($varBout = 1; $varBout < 100; $varBout += 15)
            {
                echo "On tient le bon bout... <br/>";
            }
        ?>
        <br/>
        <!--Exercice n°8-->
        <h2>Exercice 8</h2>
        <?php
            for($varEnfin = 200; $varEnfin >= 0; $varEnfin -= 12)
            {
                echo "Enfin !!! <br/>";
            }
        ?>
    </body>
</html>