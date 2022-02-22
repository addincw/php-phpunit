<?php 
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSuccessCreateCalculator()
    {
        $calculator = new \App\Controllers\Calculator;
        return $this->assertInstanceOf(\App\Controllers\Calculator::class, $calculator);
    }
    public function testSuccessCalculate()
    {
        $addition = new \App\Controllers\Operations\Addition;
        $addition->setOperands([2, 5]);

        $division = new \App\Controllers\Operations\Division;
        $division->setOperands([4, 2]);
        
        $calculator = new \App\Controllers\Calculator;
        $calculator->setOperations($addition);
        $calculator->setOperations($division);

        $this->assertIsArray($calculator->calculate());
        $this->assertEquals(7, $calculator->calculate()[0]);
        $this->assertEquals(2, $calculator->calculate()[1]);
    }
}

?>