<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php
        $os = $_GET["os"];
        echo $os;
        $file = fopen('device.csv', "r");
        while (($lista = fgetcsv($file)) !== false) {
            echo "<tr>";
            foreach ($lista as $valore) {
                print "<td>" . $valore . "</td>";
            }
            echo "</tr>";
        }
        fclose($file);
        ?>

    </table>
</body>

</html>
