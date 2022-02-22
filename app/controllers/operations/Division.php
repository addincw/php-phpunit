<?php 
namespace App\Controllers\Operations;

use App\Controllers\Operations\OperationInterface;
use App\Controllers\Operations\Operation;

class Division extends Operation Implements OperationInterface
{
    public function calculate()
    {
        return array_reduce(array_filter($this->operands), function($index1, $index2) {
                    return ($index1 !== null && $index2 !== null) ? $index1/$index2 : $index2; 
                });
    }
}
?>