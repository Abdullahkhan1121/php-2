<!-- FOR LOOP -->
<?php
for($i = 1; $i <= 10; $i++){
    echo "<br> 8 x $i = " .$i*8;
    
}
echo "<br>";
$tablenum = 18;
for($y = 1; $y <= 10; $y++){
    echo "<br> $tablenum x $y = " .$tablenum*$y;
}
echo "<br>";
for($s = 0; $s <= 10; $s++){
    for($t = 0; $t<$s; $t++){
        echo "*";
    }
    echo "<br>";
}

// WHILE LOOP
$tree = 65;
while($tree<=70){
    echo "<br> Hello while loop" .$tree;
    $tree++;
}
// do while loop
echo "<br>";
$file = 90;
do{
    echo "<br> Hello do while loop" .$file;
    $file++;
}
while($file<=93);

?>