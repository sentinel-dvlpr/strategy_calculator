<?php

require_once 'OperationStrategy.php';

class DivisionStrategy implements OperationStrategy
{
	public function execute(int|float $a, int|float $b): float|int|string
	{
		if ($b == 0) {
			return 'Division by zero.';
		}

		return $a / $b;
	}
}