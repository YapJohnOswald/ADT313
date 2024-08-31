<h1>Condition</h1>

<?php 
$age = 17;
    if($age >= 18){
        echo "Legal age";
    }
    else if($age >= 0 && $age<= 10){
        echo "something";
    }else{  
        echo "minor";
    }


    //short-hand if condition
    //(condition) ? true condition : else condition

    $agelabel ($age >= 18) ? '18+' : '17-';
    echo $agelabel;

    //DON'Ts

?>