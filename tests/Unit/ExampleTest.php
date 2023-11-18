<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Operations_controller;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    public function test_suma(): void{
        $instance = new Operations_controller();
        $result=$instance->suma(4,6);
        $this->assertEquals(11,$result);
    }
}
