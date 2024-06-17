<?php

require_once 'OperationStrategyInterface.php';

class MultiplicationStrategy implements OperationStrategyInterface
{
	public function execute(int|float $a, int|float $b): int|float
	{
		return $a * $b;
	}
}