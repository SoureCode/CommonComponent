<?php

namespace SoureCode\Component\Common\Generator;

/**
 * @deprecated Deprecated in 0.2.0 and will be removed in 1.0.0
 */
interface RandomGeneratorInterface
{
    public function generateString(int $length): string;

    public function generateNumber(int $length): string;

    public function generateInt(int $min, int $max): int;
}
