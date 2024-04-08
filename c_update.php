<?php
    include("config/one.php");
    $sql = "update users set name = 'Hary' where id = 6";
    $result = mysqli_query($conn , $sql);

?>