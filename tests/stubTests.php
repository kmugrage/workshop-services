<?php
require_once 'site/lib/hello_library.php';

class StubTest extends \PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMock('HelloWorld');

        // Configure the stub.
        $stub->expects($this->any())
             ->method('getName')
             ->will($this->returnValue('foo'));

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->getName());
    }
}
?>
