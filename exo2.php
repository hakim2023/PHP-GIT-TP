<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ex, initial-scale=1.0">
    <title>Exo2</title>
    <style>
        h1{
            text-align: center;
        }
        .img1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
         }
    </style>
</head>
<body>

    <h1>Sinus Cosinus</h1>

    <div class="img1">
         <img src="img.jpg"
               alt="sin"
               width="400px"
         >

         
             <form action="" method="get">

            <label for="angle--alpha">quel angle alpha</label>
            <input type="number" id="alpha" name="alpha">
            <input type="submit" value="resultat">

            </form>

            <?php 
           

            if (isset($_GET['alpha'])){
            
                $alpha=$_GET['alpha'];
                $x=round(cos(deg2rad($alpha)),2);
                $y=round(sin(deg2rad($alpha)),2);
            
          
            }
            
            echo "la position de P est " .'(x = '.$x .', y ='.$y.')' ; ?>
    </div>


    
    

</body>
</html>