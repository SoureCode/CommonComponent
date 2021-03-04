<?php

namespace SoureCode\Component\Common\Tests\Generator;

use PHPUnit\Framework\TestCase;
use SoureCode\Component\Common\Generator\RandomGenerator;
use function strlen;

class RandomGeneratorTest extends TestCase
{
    public function testGenerateInt(): void
    {
        // Arrange
        $generator = new RandomGenerator();

        // Act
        $actual = $generator->generateInt(8, 1000000);

        // Assert
        self::assertGreaterThan(8, $actual);
        self::assertLessThan(1000000, $actual);
    }

    public function testGenerateNumber(): void
    {
        // Arrange
        $generator = new RandomGenerator();

        // Act
        $actual = $generator->generateNumber(8);

        // Assert
        self::assertSame(8, strlen($actual));
        self::assertTrue(ctype_digit($actual));
    }

    public function testGenerateString(): void
    {
        // Arrange
        $generator = new RandomGenerator();

        // Act
        $actual = $generator->generateString(10);

        // Assert
        self::assertSame(10, strlen($actual));
    }
}
