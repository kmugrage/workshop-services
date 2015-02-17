<?php

require_once("lib/hello_library.php");
require_once("lib/math_library.php");

?>

<p>Hello There</p>
<?php
$helloThere = new HelloWorld();
$helloThere->sayHi();
?>

<p>Basic Math</p>
<?php
$doMath = new BasicMath();

print "2 + 2 = " . $doMath->addStuff(2, 2)

?> 
