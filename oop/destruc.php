<?php
echo "Example 3  :__Destruct function";
echo '<br>';
//Example 3 A destructor is called when the object is destructed or the script is stopped or exited.
//__destruct() function that is automatically called at the end of the script:
class students{
    public $name;
    public $lastname;
    function __construct($name,$lastname){
        $this->name=$name;
        $this ->lastname=$lastname;
    }
    function __destruct(){
        echo "your name: {$this->name} and last name: {$this->lastname}.";
    }
}
$person1 = new students("Abdifitah","yusuf"); 
?>