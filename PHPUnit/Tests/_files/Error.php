<?php
class Error extends PHPUnit_Framework_TestCase
{
    protected function runTest(array $dependencyInput = array())
    {
        throw new Exception;
    }
}
?>
