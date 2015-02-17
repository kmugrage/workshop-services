<?php

require_once("site/lib/math_library.php");

class MathTest extends \PHPUnit_Framework_TestCase
{
    // ...
    
    public function testAddition()
    {
        // create new
        $a = new BasicMath();

        // Assert our default name is there
        $this->assertEquals(4, $a->addStuff(2, 2));
    }
	
	public function testSubtraction()
	{
		$a = new BasicMath();
		
		$this->assertEquals(0, $a->subtractStuff(2, 2));
	}

    // ...
}

?>
