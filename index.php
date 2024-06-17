<?php

require_once 'ExpressionParser.php';

$expression = readline('Enter expression: ');

$parser = new ExpressionParser();
$result = $parser->calculate($expression);

echo "$expression = $result\n";