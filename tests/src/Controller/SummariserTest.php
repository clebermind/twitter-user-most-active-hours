<?php

namespace TwitterSummariser\tests\src\Controller;

use PHPUnit\Framework\TestCase;
use TwitterSummariser\src\Controller\Summariser;

class SummariserTest extends TestCase
{
    /**
     * @var Summariser
     */
    private $summariser;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->summariser = new Summariser();
    }

    /**
     * @return void
     */
    public function tearDown()
    {
         unset($this->summariser);
    }

    /**
     * @return void
     */
    public function testHelloWorld()
    {
        $this->expectOutputString('Hello World');
        $this->summariser->display();
    }
}
