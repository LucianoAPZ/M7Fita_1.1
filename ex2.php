<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex2</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <?php

                for($i = 0; $i <= 7; $i++){

                    $chrx = chr(65 + $i);

                    echo "<td style='border: 1px solid black; border-collapse: collapse;'> $chrx </td>";

                }
            ?>

        </tr>

         <tr>

            <?php

                for($i = 0; $i <= 7; $i++){

                    echo "<td style='border: 1px solid black; border-collapse: collapse;'> $i </td>";

                }

            ?>
            

        </tr>

    </table>
    
</body>
</html>