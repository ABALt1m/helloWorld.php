<DOCTYPE html>
    <html lang="nl">
    <head>
        <title>
            hello world
        </title>
    </head>
    <body>
     <?php
     $tijdNu = date("H:i");
     echo "$tijdNu";
     if ($tijdNu<12 && $tijdNu>6){
        echo "ochtend";
     };
     if ($tijdNu>= 12 && $tijdNu<18){
       echo "middag";
     };
     if ($tijdNu>= 18 && $tijdNu<24){
         echo "avond";
     };








     ?>
    </body>
    </html>
<?php

