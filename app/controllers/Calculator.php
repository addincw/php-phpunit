<?php
namespace App\Controllers;

use App\Controllers\Operations\OperationInterface;

class Calculator implements OperationInterface
{
    protected $operations = [];

    public function setOperations(OperationInterface $operation)
    {
        if(!$operation instanceof OperationInterface) return;

        array_push($this->operations, $operation);
    }

    public function calculate()
    {
        $results = [];
        foreach ($this->operations as $operation) {
            $results[] = $operation->calculate();
        }

        return $results;
    }
}
?>