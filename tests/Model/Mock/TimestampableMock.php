<?php

namespace SoureCode\Component\Common\Tests\Model\Mock;

use SoureCode\Component\Common\Domain\TimestampableTrait;
use SoureCode\Component\Common\Model\TimestampableInterface;

class TimestampableMock implements TimestampableInterface
{
    use TimestampableTrait;
}
