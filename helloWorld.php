<DOCTYPE html>
    <html lang="nl">
<head>
    <title>
        Hello World
    </title>
</head>

    <body>
        <?php
        $todayDate= date("l j F Y");
        echo "het is vandaag $todayDate <br>" ;
        $questionB= date("z" );
        echo "vandaag is het {$questionB}e van de jaar <br>";
        $questionC= date("l");
        $dayNumber= date("N");
        echo "{$questionC} is de {$dayNumber}e dag van de week<br>";
        $questionD = date("F");
        $monthNumber = date("t");
        echo "De maand $questionD heeft in totaal $monthNumber dagen <br>";
        $questionE = date("Y");
        $yearDayNumber = date("L");
        $leapYear = 1 || 0 ;
        if ($yearDayNumber != 1){
            echo "het jaar $questionE is geen schikkeljaar";
        }
        else{
            echo "het jaar $questionE is een schikkeljaar";
        }


        ?>
    </body>

    </html>

<?php

