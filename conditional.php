<?php
$age = 50;
$isCnic = false;

    if($age >=20){
        echo "<br> You can drive a car";
        if($isCnic === true){
        echo "<br> You can take my car";
        }
        else{
            echo "<br> Just Go Home & purchase your own car";
        }
    }
    else{
        echo "<br> You can not drive a car";
    }


    echo "<br>";

    for($myNumber=0; $myNumber<=20; $myNumber++){
        if($myNumber%2==0){
            echo "<br> The Number is EVEN!" .$myNumber;
        }
        else{
            echo "<br> The Number is ODD!" .$myNumber;

        }
    }
?>