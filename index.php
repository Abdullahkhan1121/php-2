<?php
$name = "HELLO";    // STRING
$age = 20;          
$marks = 85.5;
$isCnic = true;

echo "<br> $name <br> $age <br> $isCnic";
echo "<br>$marks";


// AIRTHEMETIC OPERATION

$a = 25;
$b = 10;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;

echo "<br> The sum of $a + $b is : " .$c ;
echo "<br> The sub of $a - $b is : " .$d ; 
echo "<br> The mul of $a * $b is : " .$e ; 
echo "<br> The div of $a / $b is : " .$f ; 
echo "<br> The modulus of $a % $b is : " .$g ; 

// INCREMENT 
// POST INCREMENT
$apple = 40;
echo "<br> The increment of this num is : " . $apple++;
echo "<br>" . $apple;
// PRE INCREMENT
echo "<br> The increment of this num is : " . ++$apple;

$banana = 209;
echo "<br>" .$banana;
$banana -=2;
echo "<br>" .$banana;
$banana +=8;
echo "<br>" .$banana;
$banana -=15;
echo "<br>" .$banana;
$banana -=95;
echo "<br>" .$banana;

?>