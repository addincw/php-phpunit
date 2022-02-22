<?php 
namespace App\Controllers\Operations;

class Operation
{
    protected $operands;

    public function setOperands(Array $operand)
    {
        $this->operands = $operand;
    }

    public function getOperands()
    {
        return $this->operands;
    }
}
?>