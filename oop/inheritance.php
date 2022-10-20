<?php

echo '<br>';
echo '<br>';
echo "Example 4  :ineritance use extend keyword";
echo '<br>';

class qudar{
    public $name;
    public $dhadhanka;
    function __construct($name,$dhadhanka){
        $this->name=$name;
        $this->dhadhanka=$dhadhanka;
    }
    function qudarmsg(){
        echo " magaca qudarta {$this->name} dhankana waa {$this->dhadhanka}";
    }
}
class dhaxlaaye extends qudar{
    function msg(){
        echo "ma ahay Qadaarta aad jeceshahay? ";
    }
}
$qudar = new dhaxlaaye(' cisbaandhees','dhanaan');
$qudar->msg();
$qudar->qudarmsg();
?>