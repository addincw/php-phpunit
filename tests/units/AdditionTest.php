<?php 
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testSuccessCreateAddition()
    {
        $addition = new \App\Controllers\Operations\Addition;
        return $this->assertInstanceOf(\App\Controllers\Operations\Addition::class, $addition);
    }
    public function testSuccessSetAndGetOperands()
    {
        $addition = new \App\Controllers\Operations\Addition;
        $addition->setOperands([2, 5]);

        return $this->assertEquals([2, 5], $addition->getOperands());
    }
    public function testSuccessCalculate()
    {
        $addition = new \App\Controllers\Operations\Addition;
        $addition->setOperands([2, 5]);

        return $this->assertEquals(7, $addition->calculate());
    }
    public function testFailCalculateNoOperandsSet()
    {
        $this->expectException(\App\Exceptions\NoOperandException::class);

        $addition = new \App\Controllers\Operations\Addition;
        $addition->calculate();
    }
}
?>