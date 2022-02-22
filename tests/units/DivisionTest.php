<?php 
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testSuccessCreateDivision()
    {
        $division = new \App\Controllers\Operations\Division;
        return $this->assertInstanceOf(\App\Controllers\Operations\Division::class, $division);
    }
    public function testSuccessSetAndGetOperands()
    {
        $division = new \App\Controllers\Operations\Division;
        $division->setOperands([0, 2]);

        return $this->assertEquals([0, 2], $division->getOperands());
    }
    public function testSuccessCalculate()
    {
        $division = new \App\Controllers\Operations\Division;
        $division->setOperands([0, 2]);

        return $this->assertEquals(2, $division->calculate());
    }
    public function testFailCalculateDivideByZero()
    {
        $division = new \App\Controllers\Operations\Division;
        $division->setOperands([0, 0]);

        return $this->assertEquals(0, $division->calculate());
    }
}
?>