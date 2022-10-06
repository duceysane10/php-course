<?php
    // creating array
    $food=["digir","sor","canjeero"];
    // geting the length of the array
    $arraylenth=count($food);
    // printing the array
    for( $a=0; $a<$arraylenth; $a++){
        echo $food[$a];
        echo "<br>";
    }

    // anather example
    $arr = [1, 2, 3, 4, 5];
    print_r($arr);
    echo"<br>";

    //Loop Through an Associative Array
    $person=array("faarax" =>"25","cali"=>"10","saynab"=>"17");
    foreach($person as $key =>$value){
        echo 'Magaca: '.$key." D'da: ". $value ."<br>";
    }
    echo "---------------- PHP - Two-dimensional Arrays --------------------<br>";
    $cars = array (
        array("Volvo",22,18,"somalia"),
        array("BMW",15,13,"uganda"),
        array("carolla",5,2,"Turky"),
        array("Land Rover",17,15,"somali")
      );
    // printing
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].",wadanka: ".$cars[0][3]."<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].",wadanka: ".$cars[1][3]."<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].",wadanka: ".$cars[2][3]."<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].",wadanka: ".$cars[3][3]."<br>";

    // printing using for loop
    for($row =0; $row <4; $row++){
        echo "<p><b>nooca gaariga $row</b></p>";
        echo "<ul>";
    for ($col=0;$col<4;$col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    
        echo "</ul>";
    }


echo "<br>";  
/// Removing Array elements
echo "---------------- Inserting an Arrays --------------------<br>";
// way one using push
$cuntooyin = ["baasto","bariis","digir","sawaayad"];
array_push($cuntooyin,"soor","sambuus","beer");// halmar ayaad dhowr elementi ku shubi kartaa
// way kale oo ugu shubi kartid qeybta hoose
$cuntooyin[]="piza";
echo "<pre>";
print_r ($cuntooyin);
echo "</prec>";
echo"<br>";


/// Removing Array elements
echo "---------------- Removing an Arrays --------------------<br>";
$array = ["baasto","bariis","digir","sawaayad"];
array_pop($array); // wexey saareesaa array elementiska index ka udambeeyo oo ah sawaayad
echo "<pre>";
print_r ($array);
echo "</prec>";
echo "<br>";

// iyadoo la tiraayo index ka u horeeyo ee baasto
$cunto = ["baasto","bariis","digir","sawaayad"];
 array_shift($cunto);// wexeey tireesaa elemetiga u horeeyo ee arrayda kaasoo ah baasto
echo "<pre>";
print_r ($cunto);
echo "</prec>";
// iyadoo index ahaan loo tiraayo
$food = ["baasto","bariis","digir","sawaayad"];
unset($food[2]);// wexey tiri doontaa index2 oo ah digir
echo "<pre>";
print_r ($food);
echo "</prec>";
?>