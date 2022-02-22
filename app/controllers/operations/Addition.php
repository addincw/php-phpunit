<?php 
namespace App\Controllers\Operations;

use App\Controllers\Operations\OperationInterface;
use App\Controllers\Operations\Operation;

use App\Exceptions\NoOperandException;

class Addition extends Operation Implements OperationInterface
{
    public function calculate()
    {
        if(!$this->operands) {
            throw new NoOPerandException("Error no operands given", 400);
            return;
        }

        return array_sum($this->operands);
    }
}
?>