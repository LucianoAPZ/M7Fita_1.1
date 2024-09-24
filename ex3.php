<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex3</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        
        <?php

            $n = 7;

            for($i = 0; $i <= $n; $i++){

                echo "<tr>";

                for($j = 0+$i; $j <= $i+$n; $j++){

                    echo "<td style='border: 1px solid black; border-collapse: collapse;'> $j</td>" ;

                }

                echo "</tr>";

            }
        
        ?>

    </table>
    
</body>
</html>