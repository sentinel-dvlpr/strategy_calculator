<?php

require_once 'OperationStrategyInterface.php';

class SubtractionStrategy implements OperationStrategyInterface
{
	public function execute(int|float $a, int|float $b): int|float
	{
		return $a - $b;
	}
}