<?php

require_once 'OperationStrategy.php';

class MultiplicationStrategy implements OperationStrategy
{
	public function execute(int|float $a, int|float $b): int|float
	{
		return $a * $b;
	}
}