<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Opdrachten3.6</title>
    </head>
    <body>
        <h1>
        <?php
        //Opdacht 1,a
            $today=date("l j F Y");
            echo "Het is vandaag: $today <br><br>";
        //opdracht 1,b
            $today=date("z");
            echo "Vandaag is de {$today}e dag van het jaar<br><br>";
        //opdracht 1,c
            $dayName=date("l");
            $dayNumber=date("w");
            echo "$dayName is de {$dayNumber} dag van de week<br><br>";
        //opdracht 1,d
            $monthName=date("F");
            $monthDays=date("t");
            echo "De maand $monthName heeft in totaal $monthDays dagen<br><br>";
        //opdracht 1,e
            $ditJaar=date("Y");
            echo "het jaar $ditJaar ";
            ?>
        </h1>
    </body>
</html>
<?php