<?php

    include("config/one.php");


    $sql = "insert into users(Name , Email , Password) values('Alex' , 'Alex@gmail.com' , 'Alex123')";
    $result = $conn->query($sql);

    if($result == true){
        echo "<br>Your Record has been inserted";
    }else{
        echo "<br>No Record has been inserted";
    }

?>