<?php

require_once 'OperationStrategy.php';

class Calculator
{
	private OperationStrategy $strategy;

	public function setStrategy(OperationStrategy $strategy): void
	{
		$this->strategy = $strategy;
	}

	public function calculate(int|float $a, int|float $b): string|int|float
	{
		return $this->strategy->execute($a, $b);
	}
}