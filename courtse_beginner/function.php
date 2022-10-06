<?php declare(strict_types=1); // strict requirement si looga fogaado errr data types ka kadhaca ayaa strict loo is ticmaalaa
// creating a function
// Note: PHP automatically associates a data type to the variable,
function person($name,$add,$tell){
    echo "your name: $name.  adrees: $add. Tell: $tell <br>";
}
// callin function 
person("mohame","mog","0616767");
person("Abdifitah","mog","0616767");
echo "<br>";

//PHP Functions - Returning values
function add(int $a,int $b){
    $result=$a + $b;
    return $result;
}
echo (" 6+7=" .add(6,7));
?>