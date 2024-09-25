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

    $filas = 10;
    $columnas = 10;
    $espacio = " ";
    $tabla = array();

    for ($i = 0; $i <= $filas; $i++) {
        for ($j = 0; $j <= $columnas; $j++) {
            if ($i == 0) {
                if ($j == 0) {
                    $tabla[$i][$j] = $espacio;
                } else {
                    $tabla[$i][$j] = $j;
                }
            } else {
                if ($j == 0) {
                    $chrx = chr(64 + $i);
                    $tabla[$i][$j] = $chrx;
                } else {
                    $tabla[$i][$j] = $espacio;
                }
            }
        }
    }

    $fragata = 1;
    $submarí = 2;
    $destructor = 3;
    $portaavions = 4;
    $barcos = array($fragata, $submarí, $destructor, $portaavions);

    for ($i = 0; $i <= count($barcos)-1; $i++){

        $salirPosicion = true;
        while ($salirPosicion){
            $posicionY = mt_rand(1, 10);
            $posicionZ = mt_rand(1, 10);
            $bien = true; 

            if ($tabla[$posicionY][$posicionZ] == $espacio ){
                if ($barcos[$i] != 1){
                    $direccion = mt_rand(0, 3);
                    switch ($direccion) {
                        case 0: 
                            if ($posicionY - ($barcos[$i] - 1) < 1) { 
                                continue;
                            }
                            for ($j = 0; $j < $barcos[$i]; $j++) {
                                if ($tabla[$posicionY - $j][$posicionZ] != $espacio) {
                                    $bien = false; // No hay espacio
                                    break;
                                }
                            }
                            if ($bien) {
                                for ($j = 0; $j < $barcos[$i]; $j++) {
                                    $tabla[$posicionY - $j][$posicionZ] = "B".$barcos[$i]; 
                                }
                                $salirPosicion = false; 
                            }
                            break;

                        case 1:
                            if ($posicionZ + ($barcos[$i] - 1) > 10) {
                                continue;
                            }
                            for ($j = 0; $j < $barcos[$i]; $j++) {
                                if ($tabla[$posicionY][$posicionZ + $j] != $espacio) {
                                    $bien = false;
                                    break;
                                }
                            }
                            if ($bien) {
                                for ($j = 0; $j < $barcos[$i]; $j++) {
                                    $tabla[$posicionY][$posicionZ + $j] = "B".$barcos[$i];
                                }
                                $salirPosicion = false;
                            }
                            break;

                        case 2: // Vertical hacia abajo
                            if ($posicionY + ($barcos[$i] - 1) > 10) {
                                continue;
                            }
                            for ($j = 0; $j < $barcos[$i]; $j++) {
                                if ($tabla[$posicionY + $j][$posicionZ] != $espacio) {
                                    $bien = false;
                                    break;
                                }
                            }
                            if ($bien) {
                                for ($j = 0; $j < $barcos[$i]; $j++) {
                                    $tabla[$posicionY + $j][$posicionZ] = "B".$barcos[$i];
                                }
                                $salirPosicion = false;
                            }
                            break;

                        case 3: // Horizontal hacia la izquierda
                            if ($posicionZ - ($barcos[$i] - 1) < 1) {
                                continue;
                            }
                            for ($j = 0; $j < $barcos[$i]; $j++) {
                                if ($tabla[$posicionY][$posicionZ - $j] != $espacio) {
                                    $bien = false;
                                    break;
                                }
                            }
                            if ($bien) {
                                for ($j = 0; $j < $barcos[$i]; $j++) {
                                    $tabla[$posicionY][$posicionZ - $j] = "B".$barcos[$i];
                                }
                                $salirPosicion = false;
                            }
                            break;
                    }
                } else{
                    $tabla[$posicionY][$posicionZ] = "B".$barcos[$i];
                    $salirPosicion = false;
                }
                
            }
        }
        
    }

    for ($i = 0; $i <= $filas; $i++) {
        echo "<tr>";

        for ($j = 0; $j <= $columnas; $j++) {
            echo "<td style='border: 1px solid black; border-collapse: collapse;'>" . $tabla[$i][$j] . "</td>";
        }

        echo "</tr>";
    }

    ?>

</table>

    
</body>
</html>