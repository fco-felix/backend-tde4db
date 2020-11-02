<?php

$a = 2;
$b = 0;

if ($b < 1) {
    throw new InvalidArgumentException("Não é possível dividir por 0");
}

$c = $a/$b;