<?php

namespace SoureCode\Component\Common\Generator;

use function strlen;

/**
 * @deprecated Deprecated in 0.2.0 and will be removed in 1.0.0
 */
class RandomGenerator implements RandomGeneratorInterface
{
    private string $alphabet;

    private string $digits;

    public function __construct()
    {
        $this->digits = implode('', range(0, 9));

        $this->alphabet = implode(
            '',
            [
                $this->digits,
                implode('', range('a', 'z')),
                implode('', range('A', 'Z')),
                '-',
                '_',
                '~',
            ]
        );
    }

    public function generateString(int $length): string
    {
        return $this->generateFromCharsOfLength($length, $this->alphabet);
    }

    private function generateFromCharsOfLength(int $length, string $chars): string
    {
        $max = strlen($chars) - 1;
        $string = '';

        for ($i = 0; $i < $length; ++$i) {
            $index = random_int(0, $max);
            $string .= $chars[$index];
        }

        return $string;
    }

    public function generateNumber(int $length): string
    {
        return $this->generateFromCharsOfLength($length, $this->digits);
    }

    public function generateInt(int $min, int $max): int
    {
        return random_int($min, $max);
    }
}
