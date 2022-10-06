<?php 
/**file kaan waxaa ka helesaa dhamaan examles ka php basic sida string,,numbers,variable,loop,break and continue*/
// out put print or ech
echo "hello world";
// variables
$name = "kusoo dhawoow php ";
//addition using variable
echo '<br>';
echo '<-----------------variables------------------>';
$a = 10;
$b = 20;
$result = $a + $b;
echo '<br>';
echo ("a + b: ".$result);
////Loops
echo '<br>';
echo '<-----------------loops------------------>';
// while looo
echo '<br>';
$num=0;
while($num <=10){
    echo('  '.$num);
    $num ++;
    
    
}
// for Loop
echo '<br>';
for ($i=0;$i<=10;$i++){
    echo('  '.$i);
}
// do while Loop
echo '<br>';
$num=0;
do{
    echo('  '.$num);
    $num++;
}while($num <=10);

// foreah loop
echo '<br>';
// creating array
$cunto =array('bariis','baasto','soor','canjeero');
foreach($cunto as $value){
    echo ("$value , ");
}

/// break and countinue
echo '<br>';

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo  ("$x , " );
}
echo '<br>';
// break and countinue
for ($x = 0; $x <= 5; $x++) {
    if ($x == 3) {
      continue;
    }
    echo  ("$x " );
  }
?> 

