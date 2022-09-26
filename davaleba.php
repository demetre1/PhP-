<?php
$line = readline();
$TOint = intval($line);

$line2 = readline();
$ToInt = intval($line2);

if($TOint  === 0 || $ToInt  === 0 ){
    echo "Thenk you for tring";

}else if($TOint > 100 || $ToInt > 100 ){

    do{
        echo "To big number Enter number again \n";
        $line = readline();
        $line2 = readline();
        if($line == 0 || $line2 == 0){
            echo "Thank you for trying";
            break;}
        else{
            $TOint = intval($line);
            $ToInt = intval($line2);
        }
        if($ToInt < 100 && $TOint < 100){
            $sum = $TOint * $ToInt;
            echo $sum ;

        }




    }while($TOint >= 100 || $ToInt >= 100);
}


?>