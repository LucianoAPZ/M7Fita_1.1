<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex4</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        
        <?php

            $filas = 7;
            $columnas = 7;
            $espacio = " ";

            for($i = 0; $i <= $filas; $i++){
                if ($i != 0 ){

                    echo "<tr>";

                        for($j = 0; $j <= $columnas; $j++){
                            if ($j == 0){
                                $chrx = chr(64 + $i);
                                echo "<td style='border: 1px solid black; border-collapse: collapse;'>$chrx </td>" ;  
                            }

                            else {
                                echo "<td style='border: 1px solid black; border-collapse: collapse;'>$espacio </td>" ;
                            }
                        }

                    echo "</tr>";
                }
                    
                else {

                    echo "<tr>";

                        for($j = 0; $j <= $columnas; $j++){

                            if ($j == 0 ) {
                                echo "<td style='border: 1px solid black; border-collapse: collapse;'> $espacio</td>" ;
                            }

                            else {
                                echo "<td style='border: 1px solid black; border-collapse: collapse;'> $j</td>" ;
                            }
                            
                        }

                    echo "</tr>";
                }
                    
            }
        
        ?>

    </table>
    
</body>
</html>