<?php

namespace SoureCode\Component\Common\Tests\Model\Mock;

use SoureCode\Component\Common\Domain\ToggleableTrait;
use SoureCode\Component\Common\Model\ToggleableInterface;

class ToggleableMock implements ToggleableInterface
{
    use ToggleableTrait;
}
