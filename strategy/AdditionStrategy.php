<?php

require_once 'OperationStrategy.php';

class AdditionStrategy implements OperationStrategy
{
	public function execute(float|int $a, float|int $b): float|int
	{
		return $a + $b;
	}
}