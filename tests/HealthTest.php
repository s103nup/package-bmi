<?php

use PhpTheDay\Health;
use PHPUnit\Framework\TestCase;

class HealthTest extends TestCase
{
    /** @test */
    public function test_bim()
    {
        $target = new Health();
        $expected = 22.0;
        $bmi = $target->bmi(165, 60);

        $this->assertEquals($expected, $bmi);
    }
}