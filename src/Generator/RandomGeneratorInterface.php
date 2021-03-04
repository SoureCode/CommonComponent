<?php

namespace SoureCode\Component\Common\Generator;

interface RandomGeneratorInterface
{
    public function generateString(int $length): string;

    public function generateNumber(int $length): string;

    public function generateInt(int $min, int $max): int;
}
