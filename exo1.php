<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>
<body>


 
<form action="" method="get">

<label for="number--b">Ecrire un nombre</label>
<input type="number" id="number" name="number--b"
       min="1" >

       <label for="number--c">Ecrire un nombre</label>
<input type="number" id="number" name="number--c"
       min="1" >

       <input type="submit" value="Envoyer">
</form>

</body>
</html>
<?php

if (isset($_GET['number--b']) && ($_GET['number--c'])){


    // AB = c , AC = b et BC = a
    $b="";
    $c="";
    $a;
    settype($b, "integer");
    settype($c, "integer");

   

      $b=$_GET['number--b'];
      $c=$_GET['number--c'];

      $a = sqrt(pow($b,2) +pow($c,2));

    echo "La longueur (entre B et C) est a = " . round($a,2) . " (unité)";

}
