<?php
function ispair($num){

    if ($num%2 !== 1 ){
        return true;
     }else{
       return false;
     }
        
}

$sum=0;

for($i=1 ; $i<=30;$i++){
    

if( ispair($i)){
    $sum += $i;
  
    if($i ==30){
        echo "la somme des premiers entier pairs jusqu'à 30 est = $sum";
    }

}

}