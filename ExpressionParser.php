<?php

require_once 'strategy/Calculator.php';
require_once 'strategy/AdditionStrategy.php';
require_once 'strategy/SubtractionStrategy.php';
require_once 'strategy/MultiplicationStrategy.php';
require_once 'strategy/DivisionStrategy.php';

class ExpressionParser
{
	private Calculator $calculator;

	public function __construct()
	{
		$this->calculator = new Calculator();
	}

	public function calculate($expression): string
	{
		$expression = preg_replace('/\s+/', '', $expression);

		if (preg_match('/^([\d\.]+)([\+\-\*\/])([\d\.]+)$/', $expression, $matches)) {
			$a        = $matches[1];
			$operator = $matches[2];
			$b        = $matches[3];

			switch ($operator) {
				case '+':
					$this->calculator->setStrategy(new AdditionStrategy());
					break;
				case '-':
					$this->calculator->setStrategy(new SubtractionStrategy());
					break;
				case '*':
					$this->calculator->setStrategy(new MultiplicationStrategy());
					break;
				case '/':
					$this->calculator->setStrategy(new DivisionStrategy());
					break;
				default:
					return 'Unknown operator';
			}

			return $this->calculator->calculate($a, $b);
		} else {
			return 'Invalid expression';
		}
	}
}