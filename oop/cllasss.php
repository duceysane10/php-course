<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
/// example one
    class qudaar{
        public $name;
        // set_methods
        function set_name($name){
            $this->name =$name;
        }
        /// Get_method
        function get_name(){
            return $this->name;
        }
    }
    $tufaax = new qudaar();
    $moos = new qudaar();
    $tufaax ->set_name('tufaax');
    $moos->set_name('moos sokoroow');
    echo $moos->get_name();
    echo '<br>';
    echo $tufaax->get_name();
    echo '<br>';


?>
</body>
</html>