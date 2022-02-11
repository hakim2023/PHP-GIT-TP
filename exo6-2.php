<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pair impair</title>
</head>
<body>
<form action="" method="get">

<label for="number">Ecrire un nombre</label>
<input type="number" id="number" name="number"
        >        

</body>
</html>

<?php

if (isset($_GET['number'])){
     
    function ispair($num){

        if ($num%2 ==1 ){

            echo " le nombre $num est impair";
        }else{
        
            echo "le nombre $num est pair";
        }
            
    }

    $num=$_GET['number'];
    ispair($num);

    }

     