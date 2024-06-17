<?php

require_once 'OperationStrategyInterface.php';

class DivisionStrategy implements OperationStrategyInterface
{
	public function execute(int|float $a, int|float $b): float|int|string
	{
		if ($b == 0) {
			return 'Division by zero.';
		}

		return $a / $b;
	}
}