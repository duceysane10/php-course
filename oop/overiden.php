<?php
// Overriding Inherited Methods
// Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
class waalid{
    public $aabe;
    function __construct($aabe){
        $this->aabe=$aabe;
    }
    function message(){
        echo "your father name: {$this->aabe}";
    }   
}
///classka dhaxlaayo kan kore
class wiilkiisa extends waalid{
    public $name;
    function __construct($name,$aabe){
        $this->name=$name;
        $this->aabe=$aabe;
    }
    function message(){
        echo "your name {$this->name} your father name: {$this->aabe}";
    }
}
$person1 = new wiilkiisa("mohamed","Abdifitah");
$person1->message();