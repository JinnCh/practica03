<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ejercicio 1</h1>

    <?php

    $alumno = array("nombre" => "Sara", "apellido" => "Martínez", "edat" => 23, "ciudad" => "Barcelona");
    $counter = 1;
    foreach ($alumno as $s) {
        echo "dato " . $counter . "º " . $s . "<br>";
        $counter++;
    }

    ?>

    <br>
    <br>

    <h1>Ejercicio 2</h1>

    <?php
    $alumno = array("nombre" => "Sara", "apellido" => "Martinez", "edat" => 23, "ciudad" => "Barcelona");
    foreach ($alumno as $x => $y) {
        echo "$x: $y <br>";
    }
    ?>

    <br>
    <br>

    <h1>Ejercicio 3</h1>

    <?php
    $alumno = array("nombre" => "Sara", "apellido" => "Martínez", "edat" => 23, "ciudad" => "Barcelona");
    $alumno["edat"] = 24;
    $counter = 1;
    foreach ($alumno as $s) {
        echo "dato " . $counter . "º " . $s . "<br>";
        $counter++;
    }
    ?>

    <br>
    <br>

    <h1>Ejercicio 4</h1>

    <?php

    $alumno = array("nombre" => "Sara", "apellido" => "Martinez", "edat" => 23, "ciudad" => "Barcelona");
    unset($alumno["ciudad"]);
    var_dump($alumno);

    ?>

    <br>
    <br>

    <h1>Ejercicio 5</h1>

    <?php
    $letters = 'a,b,c,d,e,f';
    $arrayExploted = explode(",", $letters);
    $counter = 6;

    for ($i = 5; $i >= 0; $i--) {
        echo "letter " . $counter . "º: " . $arrayExploted[$i] . "<br>";
        $counter--;
    }
    ?>

    <br>
    <br>

    <h1>Ejercicio 6</h1>



    <?php
    $Notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($Notas);

    echo "Nota de los estudiantes: ";

    foreach ($Notas as $x => $y) {
        echo $x . ":" . $y . " ";
    }

    ?>

    <br>
    <br>

    <h1>Ejercicio 7</h1>



    <?php

    $contador = 0;

    $Notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    foreach ($Notas as $Nota) {
        $contador += $Nota;
    }

    $average = $contador / count($Notas);
    echo "Media de las notas: " . $average = number_format($average, 2);
    echo "<br>";
    echo "Alumnos con nota por encima de la media: <br>";

    foreach ($Notas as $x => $y) {
        if ($y > $average) {
            echo "$x <br>";
        }
    }

    ?>

    <br>
    <br>


    <h1>Ejercicio 8</h1>



    <?php



    $Notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);

    $notaMaxima = 0;
    $alumno = "";

    foreach ($Notas as $x => $y) {
        if ($y > $notaMaxima) {
            $notaMaxima = $y;
            $alumno = $x;
        }
    }

    echo "La nota más alta es $notaMaxima y el mejor alumno es $alumno";

    ?>

</body>



</html>