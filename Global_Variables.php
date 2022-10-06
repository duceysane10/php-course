<?php
/*PHP Global Variables - Superglobals

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

// exmple1 PHP $GLOBALS
$x =5;
$y =5;
function sum(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 sum();
echo $z;
echo '<br>';

/* example 2 PHP $_SERVER

$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. */

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>