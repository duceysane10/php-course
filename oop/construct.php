<?php
echo "Example 2 :__construct function";
echo '<br>';
/// example 2 : __construct function: If you create a __construct() function, 
//PHP will automatically call this function when you create an object from a class.
class cars{
    public $name;
    public $color;
    // construc method
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    //get method
    function get_car(){
        echo "magaca gaariga: ". $this->name; 
        echo '<br>';
        echo "nooca gaariga: ". $this->color;
    }
}
$gaari = new cars('carolla '," cadaan");
$gaari->get_car();
echo '<br>';
echo '<br>';

?>