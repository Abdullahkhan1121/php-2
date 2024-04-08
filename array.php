<!-- ARRAY FUNCTION -->
<?php
$fruits = ["Apple" , "Mango" , "Pine Apple" , "Orange"];
    echo "<br> $fruits[1]";
echo "<br>";
    // FOREACH LOOP
    foreach($fruits as $key){
        echo "<br> $key";
    }
echo "<br>";
    // ASSOCIATE ARRAY
    $employee = [
        "Dexter" => "Web Developer",
        "Ali" => "App Designer",
        "Asad" => "Graphic Designer",
    ];
    foreach($employee as $key => $values){
        echo "<br> $key : $values";
    }

?>