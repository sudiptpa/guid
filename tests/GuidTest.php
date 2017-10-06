<?php

use PHPUnit\Framework\TestCase;
use Sujip\Guid\Guid;

class GuidTest extends TestCase
{
    public function testInstanceOf()
    {
        $class = new Guid;

        $this->assertInstanceOf(Guid::class, $class);
    }
}
