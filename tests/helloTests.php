<?php

require_once("site/lib/hello_library.php");

class HelloTest extends \PHPUnit_Framework_TestCase
{
    // ...
    
    public function testDefaultNameIsSet()
    {
        // create new
        $a = new HelloWorld();

        // Assert our default name is there
        $this->assertEquals("foo", $a->getName());
    }

    // ...
}

?>
