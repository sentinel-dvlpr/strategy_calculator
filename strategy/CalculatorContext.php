<?php

require_once 'OperationStrategyInterface.php';

class CalculatorContext
{
	private OperationStrategyInterface $strategy;

	public function setStrategy(OperationStrategyInterface $strategy): void
	{
		$this->strategy = $strategy;
	}

	public function calculate(int|float $a, int|float $b): string|int|float
	{
		return $this->strategy->execute($a, $b);
	}
}