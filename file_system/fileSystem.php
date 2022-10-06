<?php
// creating one folder
//mkdir('newfolder');

// creating folder inside onother folder
//mkdir('folder1/folder',recursive:true);
//removing directory
//rmdir('newfolder');

// // working fille system
// creating a file 
if(!file_exists("./file_system/new.txt")){
$myfile =fopen('new.txt', 'w+');// w+ waxay utaagan tahay read and write for the file
$xog = ('waa file cusub waxaana ku shubay qoraalkaan');
fwrite($myfile,$xog);
echo 'si wacan ayaa loo abuuray file ka';
fclose($myfile);
}
else{
    echo 'file all ready exist';
}

// opening or reading a file line by line
// if(! file_exists('foo.txt')){
//     echo 'Fille not found';
//     return;
// }
// $file = fopen('foo.txt','r');
// while(($line = fgets($file)) != false){
//     echo $line .'<br />';
// }
// fclose($file);// functionkaan file ka la aqrinaayay ayuu xerayaa markii lasoo aqriyo kedib
