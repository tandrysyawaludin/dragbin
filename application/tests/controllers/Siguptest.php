<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SigUpTest extends TestCase
{
    function testCanBeCreatedFromValidEmailAddress()
    {
        $output = $this->request('GET', ['Signup', 'helo']);
        $expected = "helo";
        
        $this->assertContains($expected, $output);
    }
}