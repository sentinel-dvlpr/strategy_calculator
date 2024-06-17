<?php

require_once 'OperationStrategyInterface.php';

class AdditionStrategy implements OperationStrategyInterface
{
	public function execute(float|int $a, float|int $b): float|int
	{
		return $a + $b;
	}
}