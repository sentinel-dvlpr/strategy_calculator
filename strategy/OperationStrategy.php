<?php

interface OperationStrategy
{
	public function execute(int|float $a, int|float $b): int|float|string;
}