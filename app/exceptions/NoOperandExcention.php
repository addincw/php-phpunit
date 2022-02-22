<?php 
namespace App\Exceptions;

class NoOperandException extends \Exception
{
    public function errorMessage() {
        return "Error no operands given";
    }
}
?>